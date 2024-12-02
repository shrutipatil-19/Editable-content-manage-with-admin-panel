<?php

namespace App\Filament\Clusters\Home\Resources\ParallaxBannerResource\Pages;

use App\Filament\Clusters\Home\Resources\ParallaxBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateParallaxBanner extends CreateRecord
{
    protected static string $resource = ParallaxBannerResource::class;
}
