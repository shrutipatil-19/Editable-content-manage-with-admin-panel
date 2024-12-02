<?php

namespace App\Filament\Clusters\Home\Resources\BestFeatureCardResource\Pages;

use App\Filament\Clusters\Home\Resources\BestFeatureCardResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBestFeatureCards extends ListRecords
{
    protected static string $resource = BestFeatureCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
