<?php

namespace App\Filament\Clusters\Home\Resources\FeatureCardResource\Pages;

use App\Filament\Clusters\Home\Resources\FeatureCardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeatureCard extends EditRecord
{
    protected static string $resource = FeatureCardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
