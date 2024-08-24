<?php

namespace App\Filament\Resources\DeclinedLicenseRequestResource\Pages;

use App\Filament\Resources\DeclinedLicenseRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeclinedLicenseRequest extends EditRecord
{
    protected static string $resource = DeclinedLicenseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
