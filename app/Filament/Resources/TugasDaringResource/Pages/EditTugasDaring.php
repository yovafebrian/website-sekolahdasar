<?php

namespace App\Filament\Resources\TugasDaringResource\Pages;

use App\Filament\Resources\TugasDaringResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTugasDaring extends EditRecord
{
    protected static string $resource = TugasDaringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
