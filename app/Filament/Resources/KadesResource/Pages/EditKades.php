<?php

namespace App\Filament\Resources\KadesResource\Pages;

use App\Filament\Resources\KadesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKades extends EditRecord
{
    protected static string $resource = KadesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
