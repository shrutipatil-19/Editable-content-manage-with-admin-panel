<?php

namespace App\Filament\Clusters\Home\Resources\SpaceResource\Pages;

use App\Filament\Clusters\Home\Resources\SpaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpaces extends ListRecords
{
    protected static string $resource = SpaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
