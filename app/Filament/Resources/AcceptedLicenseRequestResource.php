<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcceptedLicenseRequestResource\Pages;
use App\Filament\Resources\AcceptedLicenseRequestResource\RelationManagers;
use App\Models\AcceptedLicenseRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AcceptedLicenseRequestResource extends Resource
{
    protected static ?string $model = AcceptedLicenseRequest::class;
    protected static ?string $navigationGroup = 'License';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('license_request_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('email_sent_to')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('attachment')
                    ->label('Attachment')
                    ->directory('License/mail')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5120) // 5MB
                    ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('license_request_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_sent_to')
                    ->searchable(),
                Tables\Columns\TextColumn::make('attachment')
                    ->label('attachment')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(AcceptedLicenseRequest $record): string => asset("storage/{$record->attachment}"))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListAcceptedLicenseRequests::route('/'),
            'create' => Pages\CreateAcceptedLicenseRequest::route('/create'),
            'edit' => Pages\EditAcceptedLicenseRequest::route('/{record}/edit'),
        ];
    }
}
