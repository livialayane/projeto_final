<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContatosResource\Pages;
use App\Filament\Resources\ContatosResource\RelationManagers;
use App\Models\Contatos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContatosResource extends Resource
{
    protected static ?string $model = Contatos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('atendimento')
                ->required()
                ->label('Horário de atendimento')
                ->maxDate(now()),
                Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->maxLength(255),
                Forms\Components\TextInput::make('telefone')
                ->required()
                ->label('Telefone de contato')
                ->tel(),
                Forms\Components\TextInput::make('endereço')
                ->required()
                ->maxLength(255)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListContatos::route('/'),
            'create' => Pages\CreateContatos::route('/create'),
            'edit' => Pages\EditContatos::route('/{record}/edit'),
        ];
    }    
}
