<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArquivosResource\Pages;
use App\Filament\Resources\ArquivosResource\RelationManagers;
use App\Models\Arquivos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class ArquivosResource extends Resource
{
    protected static ?string $model = Arquivos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('attachment')
                ->label('Escolher arquivo:')
                ->preserveFilenames(),
                Forms\Components\Select::make('type')
                ->label('Tipo de documento')
                ->options([
                    'autorizacao' => 'Autorização',
                    'procuracao' => 'Procuração',
                    ]),   
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
            'index' => Pages\ListArquivos::route('/'),
            'create' => Pages\CreateArquivos::route('/create'),
            'edit' => Pages\EditArquivos::route('/{record}/edit'),
        ];
    }    
}
