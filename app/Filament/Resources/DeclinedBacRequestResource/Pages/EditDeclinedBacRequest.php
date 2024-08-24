<?php

namespace App\Filament\Resources\DeclinedBacRequestResource\Pages;

use App\Filament\Resources\DeclinedBacRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeclinedBacRequest extends EditRecord
{
    protected static string $resource = DeclinedBacRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
