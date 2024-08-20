<?php

namespace App\Filament\Resources\LicenseRequestResource\Pages;

use App\Filament\Resources\LicenseRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLicenseRequests extends ListRecords
{
    protected static string $resource = LicenseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
