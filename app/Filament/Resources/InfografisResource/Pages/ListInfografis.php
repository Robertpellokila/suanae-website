<?php

namespace App\Filament\Resources\InfografisResource\Pages;

use App\Filament\Resources\InfografisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfografis extends ListRecords
{
    protected static string $resource = InfografisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Infografi Baru'),
        ];
    }
}