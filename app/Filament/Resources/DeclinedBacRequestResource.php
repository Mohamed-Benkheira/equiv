<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeclinedBacRequestResource\Pages;
use App\Filament\Resources\DeclinedBacRequestResource\RelationManagers;
use App\Models\DeclinedBacRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeclinedBacRequestResource extends Resource
{
    protected static ?string $model = DeclinedBacRequest::class;
    protected static ?string $navigationGroup = 'Bac';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bac_request_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('email_sent_to')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bac_request_id')
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
            'index' => Pages\ListDeclinedBacRequests::route('/'),
            'create' => Pages\CreateDeclinedBacRequest::route('/create'),
            'edit' => Pages\EditDeclinedBacRequest::route('/{record}/edit'),
        ];
    }
}
