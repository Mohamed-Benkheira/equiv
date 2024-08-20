<?php

namespace App\Filament\Resources\LicenseRequestResource\Pages;

use App\Filament\Resources\LicenseRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLicenseRequest extends EditRecord
{
    protected static string $resource = LicenseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
