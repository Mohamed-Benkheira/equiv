<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeclinedLicenseRequestResource\Pages;
use App\Filament\Resources\DeclinedLicenseRequestResource\RelationManagers;
use App\Models\DeclinedLicenseRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeclinedLicenseRequestResource extends Resource
{
    protected static ?string $navigationGroup = 'License';

    protected static ?string $model = DeclinedLicenseRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
                Tables\Columns\TextColumn::make('message')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDeclinedLicenseRequests::route('/'),
            'create' => Pages\CreateDeclinedLicenseRequest::route('/create'),
            'edit' => Pages\EditDeclinedLicenseRequest::route('/{record}/edit'),
        ];
    }
}
