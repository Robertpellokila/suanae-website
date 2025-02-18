<?php

namespace App\Filament\Resources\IdmResource\Pages;

use App\Filament\Resources\IdmResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIdm extends ViewRecord
{
    protected static string $resource = IdmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
