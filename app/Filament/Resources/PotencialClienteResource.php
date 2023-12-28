<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PotencialClienteResource\Pages;
use App\Filament\Resources\PotencialClienteResource\RelationManagers;
use App\Models\PotencialCliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PotencialClienteResource extends Resource
{
    protected static ?string $model = PotencialCliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('telefone')
                    ->tel()
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('cidade')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Select::make('id_servico')
                    ->relationship('servico','titulo')
                    ->required(),
                Forms\Components\TextInput::make('descricao')
                    ->maxLength(200),
                Forms\Components\Toggle::make('viavel'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cidade')
                    ->searchable(),
                Tables\Columns\TextColumn::make('servico.titulo')
                    ->sortable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable()
                    ->wrap(),
                Tables\Columns\IconColumn::make('viavel')
                    ->boolean(),
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
            'index' => Pages\ManagePotencialClientes::route('/'),
        ];
    }
}
