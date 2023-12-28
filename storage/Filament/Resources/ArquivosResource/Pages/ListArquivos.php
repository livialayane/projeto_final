<?php

namespace App\Filament\Resources\ArquivosResource\Pages;

use App\Filament\Resources\ArquivosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArquivos extends ListRecords
{
    protected static string $resource = ArquivosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
