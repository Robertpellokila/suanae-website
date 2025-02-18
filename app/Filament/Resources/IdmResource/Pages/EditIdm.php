<?php

namespace App\Filament\Resources\IdmResource\Pages;

use App\Filament\Resources\IdmResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdm extends EditRecord
{
    protected static string $resource = IdmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
