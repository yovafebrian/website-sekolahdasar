<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SambutanKepalaSekolahResource\Pages;
use App\Filament\Resources\SambutanKepalaSekolahResource\RelationManagers;
use App\Models\SambutanKepalaSekolah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class SambutanKepalaSekolahResource extends Resource
{
    protected static ?string $model = SambutanKepalaSekolah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image_path')
                ->image()
                ->directory('sambutan')
                ->required()
                ->label('Foto Kepala Sekolah'),

            RichEditor::make('content')
                ->label('Isi Sambutan')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')->label('Foto'),
                Tables\Columns\TextColumn::make('content')->limit(100)->label('Isi Sambutan'),
            ])
            ->filters([
                //
            ])
            
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSambutanKepalaSekolahs::route('/'),
            'create' => Pages\CreateSambutanKepalaSekolah::route('/create'),
            'edit' => Pages\EditSambutanKepalaSekolah::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
        {
            return \App\Models\SambutanKepalaSekolah::count() < 1;
        }

}