<?php

namespace App\Filament\Resources\AparaturResource\Pages;

use App\Filament\Resources\AparaturResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAparatur extends EditRecord
{
    protected static string $resource = AparaturResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
