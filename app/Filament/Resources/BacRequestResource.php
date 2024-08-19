<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BacRequestResource\Pages;
use App\Models\BacRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\BacRequestAccepted;
use App\Models\AcceptedBacRequest;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;

use Filament\Notifications\Notification;




class BacRequestResource extends Resource
{
    protected static ?string $model = BacRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('applicant_id')
                    ->relationship('applicant', 'full_name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('school_name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('certificate_date')
                    ->required(),

                Forms\Components\FileUpload::make('id_card_path')
                    ->label('ID Card')
                    ->directory('documents/id_cards')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),

                Forms\Components\FileUpload::make('certificate_file_path')
                    ->label('Certificate File')
                    ->directory('documents/certificates')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),

                Forms\Components\FileUpload::make('degrees_paper_path')
                    ->label('Degrees Paper')
                    ->directory('documents/degrees')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),

                Forms\Components\Checkbox::make('info_accuracy')
                    ->label('I confirm that the information provided is valid and original')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'accepted' => 'success',
                        'pending' => 'warning',
                        default => 'danger',
                    })->sortable(),
                Tables\Columns\TextColumn::make('applicant.full_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('applicant.email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('school_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('certificate_date')
                    ->date()
                    ->toggleable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_card_path')
                    ->label('ID Card')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(BacRequest $record): string => asset("storage/{$record->id_card_path}"))
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('certificate_file_path')
                    ->label('Certificate')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(BacRequest $record): string => asset("storage/{$record->certificate_file_path}"))
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('degrees_paper_path')
                    ->label('Degrees Paper')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(BacRequest $record): string => asset("storage/{$record->degrees_paper_path}"))
                    ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('accept')
                    ->label('Accept Request')
                    ->icon('heroicon-o-check')
                    ->hidden(fn(BacRequest $record) => $record->status === 'accepted')
                    ->color('success')
                    ->form([
                        Forms\Components\TextInput::make('full_name')
                            ->label('Full Name')
                            ->default(fn(BacRequest $record) => $record->applicant->full_name)
                            ->disabled(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->default(fn(BacRequest $record) => $record->applicant->email)
                            ->disabled(),
                        Forms\Components\Textarea::make('message')
                            ->label('Email Message')
                            ->required(),
                        Forms\Components\FileUpload::make('attachment')
                            ->label('Attachment')
                            ->directory('email-attachments')
                            ->acceptedFileTypes(['application/pdf', 'image/*'])
                            ->maxSize(5120), // 5MB
                    ])
                    ->action(function (BacRequest $record, array $data) {
                        // Send email
                        Mail::to($record->applicant->email)
                            ->send(new BacRequestAccepted($record, $data['message'], $data['attachment']));

                        // Save to AcceptedBacRequest table
                        AcceptedBacRequest::create([
                            'bac_request_id' => $record->id,
                            'email_sent_to' => $record->applicant->email,
                            'message' => $data['message'],
                            'attachment' => $data['attachment'],
                        ]);

                        // Update the status of the BacRequest
                        $record->update(['status' => 'accepted']);
                    })
                    ->successNotification(
                        notification: fn($record) => Notification::make()
                            ->success()
                            ->title('Request Accepted')
                            ->body("The request for {$record->applicant->full_name} has been accepted and an email has been sent.")
                    )

            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    // Add other bulk actions here if needed
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBacRequests::route('/'),
            'create' => Pages\CreateBacRequest::route('/create'),
            'edit' => Pages\EditBacRequest::route('/{record}/edit'),
        ];
    }
}