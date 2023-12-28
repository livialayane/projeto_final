<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestaqueResource\Pages;
use App\Filament\Resources\DestaqueResource\RelationManagers;
use App\Models\Destaque;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DestaqueResource extends Resource
{
    protected static ?string $model = Destaque::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('imagem')
                    ->required()
                    ->directory('destaques')
                    ->preserveFilenames(),
                Forms\Components\TextInput::make('titulo')
                    ->maxLength(200),
                Forms\Components\TextInput::make('descricao')
                    ->maxLength(400),
               
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('imagem')->width(70)
                ->height(70),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable()
                    ->wrap(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDestaques::route('/'),
        ];
    }
}
