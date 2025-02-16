<?php

namespace App\Filament\Resources\InfografisResource\Pages;

use App\Filament\Resources\InfografisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfografis extends EditRecord
{
    protected static string $resource = InfografisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
