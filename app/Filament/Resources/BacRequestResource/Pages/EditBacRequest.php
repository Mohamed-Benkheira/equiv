<?php

namespace App\Filament\Resources\BacRequestResource\Pages;

use App\Filament\Resources\BacRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBacRequest extends EditRecord
{
    protected static string $resource = BacRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
