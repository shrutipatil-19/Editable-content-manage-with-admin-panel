<?php

namespace App\Filament\Clusters\Home\Resources\FeatureCardResource\Pages;

use App\Filament\Clusters\Home\Resources\FeatureCardResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeatureCard extends CreateRecord
{
    protected static string $resource = FeatureCardResource::class;
}
