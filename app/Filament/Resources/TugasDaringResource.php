<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TugasDaringResource\Pages;
use App\Filament\Resources\TugasDaringResource\RelationManagers;
use App\Models\TugasDaring;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;



class TugasDaringResource extends Resource
{
    protected static ?string $model = TugasDaring::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('grade')
                ->label('Kelas')
                ->options([
                    1 => 'Kelas 1',
                    2 => 'Kelas 2',
                    3 => 'Kelas 3',
                    4 => 'Kelas 4',
                    5 => 'Kelas 5',
                    6 => 'Kelas 6',
                ])
                ->required(),
    
            TextInput::make('subject')
                ->label('Mata Pelajaran')
                ->required(),
    
            TextInput::make('title')
                ->label('Judul Video')
                ->required(),
    
            TextInput::make('youtube_link')
                ->label('Link YouTube')
                ->url()
            ]);    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('grade')->label('Kelas'),
                TextColumn::make('subject')->label('Mata Pelajaran'),
                TextColumn::make('title')->label('Judul'),
                TextColumn::make('youtube_link')->label('Link')->limit(30),
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
            'index' => Pages\ListTugasDarings::route('/'),
            'create' => Pages\CreateTugasDaring::route('/create'),
            'edit' => Pages\EditTugasDaring::route('/{record}/edit'),
        ];
    }
}