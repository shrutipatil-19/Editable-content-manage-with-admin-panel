<?php

namespace App\Filament\Clusters\Home\Resources\BestFeatureCardResource\Pages;

use App\Filament\Clusters\Home\Resources\BestFeatureCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBestFeatureCard extends EditRecord
{
    protected static string $resource = BestFeatureCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
