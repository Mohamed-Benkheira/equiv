<?php

namespace App\Filament\Resources\DeclinedLicenseRequestResource\Pages;

use App\Filament\Resources\DeclinedLicenseRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeclinedLicenseRequests extends ListRecords
{
    protected static string $resource = DeclinedLicenseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
