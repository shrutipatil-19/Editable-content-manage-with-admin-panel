<?php

namespace App\Filament\Clusters\AboutUs\Resources\AboutResource\Pages;

use App\Filament\Clusters\AboutUs\Resources\AboutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbouts extends ListRecords
{
    protected static string $resource = AboutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
