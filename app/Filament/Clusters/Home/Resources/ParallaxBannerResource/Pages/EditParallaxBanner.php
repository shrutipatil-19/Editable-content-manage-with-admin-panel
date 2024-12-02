<?php

namespace App\Filament\Clusters\Home\Resources\ParallaxBannerResource\Pages;

use App\Filament\Clusters\Home\Resources\ParallaxBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParallaxBanner extends EditRecord
{
    protected static string $resource = ParallaxBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
