<?php

namespace App\Filament\Resources\DestaqueResource\Pages;

use App\Filament\Resources\DestaqueResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDestaques extends ManageRecords
{
    protected static string $resource = DestaqueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
