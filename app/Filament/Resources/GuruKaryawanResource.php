<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuruKaryawanResource\Pages;
use App\Filament\Resources\GuruKaryawanResource\RelationManagers;
use App\Models\GuruKaryawans;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class GuruKaryawanResource extends Resource
{
    protected static ?string $model = GuruKaryawans::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Manajemen Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),

                TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(),

                TextInput::make('no_telfon')
                    ->required()
                    ->maxLength(20),

                FileUpload::make('foto')
                    ->image()
                    ->directory('uploads/guru_karyawan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('foto')
                    ->circular(),

                TextColumn::make('nama')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jabatan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('no_telfon'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGuruKaryawans::route('/'),
            'create' => Pages\CreateGuruKaryawan::route('/create'),
            'edit' => Pages\EditGuruKaryawan::route('/{record}/edit'),
        ];
    }
}
