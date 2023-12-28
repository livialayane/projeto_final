<?php

namespace App\Filament\Resources\SobreResource\Pages;

use App\Filament\Resources\SobreResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSobres extends ManageRecords
{
    protected static string $resource = SobreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
