<?php

namespace App\Filament\Clusters\Home\Resources\ParallaxBannerResource\Pages;

use App\Filament\Clusters\Home\Resources\ParallaxBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParallaxBanners extends ListRecords
{
    protected static string $resource = ParallaxBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
