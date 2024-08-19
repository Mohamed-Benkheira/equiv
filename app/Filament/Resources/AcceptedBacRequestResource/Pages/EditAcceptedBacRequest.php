<?php

namespace App\Filament\Resources\AcceptedBacRequestResource\Pages;

use App\Filament\Resources\AcceptedBacRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAcceptedBacRequest extends EditRecord
{
    protected static string $resource = AcceptedBacRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
