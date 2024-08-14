<?php

namespace App\Filament\Resources\BacRequestResource\Pages;

use App\Filament\Resources\BacRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBacRequests extends ListRecords
{
    protected static string $resource = BacRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
