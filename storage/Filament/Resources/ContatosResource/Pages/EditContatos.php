<?php

namespace App\Filament\Resources\ContatosResource\Pages;

use App\Filament\Resources\ContatosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContatos extends EditRecord
{
    protected static string $resource = ContatosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
