<?php

namespace App\Filament\Resources\TugasDaringResource\Pages;

use App\Filament\Resources\TugasDaringResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTugasDarings extends ListRecords
{
    protected static string $resource = TugasDaringResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
