<?php

namespace App\Filament\Clusters\Home\Resources\FeatureCardResource\Pages;

use App\Filament\Clusters\Home\Resources\FeatureCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeatureCards extends ListRecords
{
    protected static string $resource = FeatureCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
