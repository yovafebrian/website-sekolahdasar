<?php

namespace App\Filament\Resources\GuruKaryawanResource\Pages;

use App\Filament\Resources\GuruKaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuruKaryawans extends ListRecords
{
    protected static string $resource = GuruKaryawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
