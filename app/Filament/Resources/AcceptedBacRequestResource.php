<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcceptedBacRequestResource\Pages;
use App\Filament\Resources\AcceptedBacRequestResource\RelationManagers;
use App\Models\AcceptedBacRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;


class AcceptedBacRequestResource extends Resource
{
    protected static ?string $model = AcceptedBacRequest::class;

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
                Forms\Components\TextInput::make('attachment')
                    ->maxLength(255),
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
                Tables\Columns\TextColumn::make('attachment')
                    ->label('attachment')
                    ->formatStateUsing(fn(string $state): string => __('View'))
                    ->url(fn(AcceptedBacRequest $record): string => asset("storage/{$record->attachment}"))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListAcceptedBacRequests::route('/'),
            'create' => Pages\CreateAcceptedBacRequest::route('/create'),
            'edit' => Pages\EditAcceptedBacRequest::route('/{record}/edit'),
        ];
    }
}
