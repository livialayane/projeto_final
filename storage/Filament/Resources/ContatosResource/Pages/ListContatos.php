<?php

namespace App\Filament\Resources\ContatosResource\Pages;

use App\Filament\Resources\ContatosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContatos extends ListRecords
{
    protected static string $resource = ContatosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
