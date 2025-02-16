<?php

namespace App\Filament\Resources\KadesResource\Pages;

use App\Filament\Resources\KadesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKades extends ListRecords
{
    protected static string $resource = KadesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Data Baru'),
        ];
    }
}