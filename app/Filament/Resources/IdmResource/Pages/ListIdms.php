<?php

namespace App\Filament\Resources\IdmResource\Pages;

use App\Filament\Resources\IdmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIdms extends ListRecords
{
    protected static string $resource = IdmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Data baru'),
        ];
    }
}