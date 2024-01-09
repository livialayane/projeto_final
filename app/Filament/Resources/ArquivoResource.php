<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArquivoResource\Pages;
use App\Filament\Resources\ArquivoResource\RelationManagers;
use App\Models\Arquivo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Enums\FiltersLayout;


class ArquivoResource extends Resource
{
    protected static ?string $model = Arquivo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_servico')
                ->relationship('servico','titulo')    
                ->required(),
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(200),
                Forms\Components\FileUpload::make('documento')
                    ->required()
                    ->directory('documentos')
                    ->preserveFilenames(),
                 

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('servico.titulo')
                ->searchable(),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('documento')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        
                        $url = storage_path($state);
                        return "<a href='{$url}' target='_blank'>Download File</a>";
                    })->html(),
            ])
            ->filters([
                SelectFilter::make('servico')
                ->relationship('servico', 'titulo')
            ],layout: FiltersLayout::AboveContent)
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
            'index' => Pages\ManageArquivos::route('/'),
        ];
    }
}
