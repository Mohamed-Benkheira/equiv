<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicantResource\Pages;
use App\Filament\Resources\ApplicantResource\RelationManagers;
use App\Models\Applicant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Illuminate\Support\Facades\Hash;


class ApplicantResource extends Resource
{
    protected static ?string $model = Applicant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('nationality')
                    ->label('Nationality')
                    ->options([
                        'Saudi Arabian' => 'Saudi Arabian',
                        'American' => 'American',
                        'French' => 'French',
                    ])
                    ->required(),

                TextInput::make('full_name')
                    ->label('Full Name')
                    ->required(),

                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->required(),

                TextInput::make('email')
                    ->label('E-Mail Address')
                    ->email()
                    ->required(),

                // Password field only shown in create form
                TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(fn(string $context) => $context === 'create')
                    ->dehydrateStateUsing(fn($state) => $state ? Hash::make($state) : null)
                    ->hidden(fn(string $context) => $context === 'edit'),

                // Confirm password field only shown in create form
                TextInput::make('password_confirmation')
                    ->label('Confirm Password')
                    ->password()
                    ->required(fn(string $context) => $context === 'create')
                    ->same('password')
                    ->hidden(fn(string $context) => $context === 'edit'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable(),

                TextColumn::make('full_name')
                    ->label('Full Name')
                    ->searchable(),

                TextColumn::make('phone_number')
                    ->label('Phone Number')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('E-Mail Address')
                    ->searchable(),

                TextColumn::make('nationality')
                    ->label('Nationality'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Created At'),
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
            'index' => Pages\ListApplicants::route('/'),
            'create' => Pages\CreateApplicant::route('/create'),
            'edit' => Pages\EditApplicant::route('/{record}/edit'),
        ];
    }
}
