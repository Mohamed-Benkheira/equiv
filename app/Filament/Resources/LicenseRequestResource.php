<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LicenseRequestResource\Pages;
use App\Filament\Resources\LicenseRequestResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;
use App\Mail\LicenseRequestAccepted;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use App\Models\AcceptedLicenseRequest;
use App\Models\LicenseRequest;



class LicenseRequestResource extends Resource
{
    protected static ?string $model = LicenseRequest::class;
    protected static ?string $navigationGroup = 'License';

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
                    ->directory('LicenseDocument/id_cards')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),

                Forms\Components\FileUpload::make('bac_certificate_file_path')
                    ->label('Bac Certificate File')
                    ->directory('LicenseDocument/bac_certificates')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),

                Forms\Components\FileUpload::make('certificate_for_equivalence_file_path')
                    ->label('Certificate For Equivalence')
                    ->directory('LicenseDocument/certificates_for_equivalence')
                    ->acceptedFileTypes(['image/*', 'application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required(),
                Forms\Components\FileUpload::make('statement_of_marks_or_certificate_appendix')
                    ->label('Statement Of Marks Or Certificate Appendix')
                    ->directory('LicenseDocument/statements_of_marks_or_certificate_appendix')
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
                Tables\Columns\TextColumn::make('school_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('certificate_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_card_path')
                    ->label('ID Card')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(LicenseRequest $record): string => asset("storage/{$record->id_card_path}")),

                Tables\Columns\TextColumn::make('bac_certificate_file_path')
                    ->label('Bac Certificate')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(LicenseRequest $record): string => asset("storage/{$record->bac_certificate_file_path}")),
                Tables\Columns\TextColumn::make('certificate_for_equivalence_file_path')
                    ->label('Certificate For Equivalence')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(LicenseRequest $record): string => asset("storage/{$record->certificate_for_equivalence_file_path}")),
                Tables\Columns\TextColumn::make('statement_of_marks_or_certificate_appendix')
                    ->label('Statement Of Marks Or Certificate Appendix')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(LicenseRequest $record): string => asset("storage/{$record->statement_of_marks_or_certificate_appendix}")),
                Tables\Columns\IconColumn::make('info_accuracy')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('accept')
                    ->label('Accept Request')
                    ->icon('heroicon-o-check')
                    ->hidden(fn(LicenseRequest $record) => $record->status === 'accepted')
                    ->color('success')
                    ->form([
                        Forms\Components\TextInput::make('full_name')
                            ->label('Full Name')
                            ->default(fn(LicenseRequest $record) => $record->applicant->full_name)
                            ->disabled(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->default(fn(LicenseRequest $record) => $record->applicant->email)
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
                    ->action(function (LicenseRequest $record, array $data) {
                        // Send email
                        Mail::to($record->applicant->email)
                            ->send(new LicenseRequestAccepted($record, $data['message'], $data['attachment']));

                        // Save to AcceptedBacRequest table
                        AcceptedLicenseRequest::create([
                            'license_request_id' => $record->id,
                            'email_sent_to' => $record->applicant->email,
                            'message' => $data['message'],
                            'attachment' => $data['attachment'],
                        ]);

                        // Update the status of the LicenseRequest
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLicenseRequests::route('/'),
            'create' => Pages\CreateLicenseRequest::route('/create'),
            'edit' => Pages\EditLicenseRequest::route('/{record}/edit'),
        ];
    }
}
