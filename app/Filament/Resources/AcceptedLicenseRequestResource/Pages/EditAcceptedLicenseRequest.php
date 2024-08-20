<?php

namespace App\Filament\Resources\AcceptedLicenseRequestResource\Pages;

use App\Filament\Resources\AcceptedLicenseRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcceptedLicenseRequest extends EditRecord
{
    protected static string $resource = AcceptedLicenseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
