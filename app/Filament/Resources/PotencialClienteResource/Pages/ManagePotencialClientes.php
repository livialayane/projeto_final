<?php

namespace App\Filament\Resources\PotencialClienteResource\Pages;

use App\Filament\Resources\PotencialClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePotencialClientes extends ManageRecords
{
    protected static string $resource = PotencialClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
