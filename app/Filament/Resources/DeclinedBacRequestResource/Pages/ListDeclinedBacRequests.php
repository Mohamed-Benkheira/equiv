<?php

namespace App\Filament\Resources\DeclinedBacRequestResource\Pages;

use App\Filament\Resources\DeclinedBacRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeclinedBacRequests extends ListRecords
{
    protected static string $resource = DeclinedBacRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
