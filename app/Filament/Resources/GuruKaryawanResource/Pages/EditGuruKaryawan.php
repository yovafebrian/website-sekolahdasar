<?php

namespace App\Filament\Resources\GuruKaryawanResource\Pages;

use App\Filament\Resources\GuruKaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuruKaryawan extends EditRecord
{
    protected static string $resource = GuruKaryawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
