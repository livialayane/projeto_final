<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SobreResource\Pages;
use App\Filament\Resources\SobreResource\RelationManagers;
use App\Models\Sobre;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class SobreResource extends Resource
{
    protected static ?string $model = Sobre::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('missao')
                ->maxLength(65535),
                Forms\Components\TextInput::make('valores')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('visao')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(300),
                Forms\Components\Textarea::make('subtitulo')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('missao')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\TextColumn::make('visao')
                    ->searchable()
                    ->wrap(),   
                Tables\Columns\TextColumn::make('valores')
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
            'index' => Pages\ManageSobres::route('/'),
        ];
    }
}
