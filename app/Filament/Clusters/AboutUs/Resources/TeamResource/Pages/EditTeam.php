<?php

namespace App\Filament\Clusters\AboutUs\Resources\TeamResource\Pages;

use App\Filament\Clusters\AboutUs\Resources\TeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeam extends EditRecord
{
    protected static string $resource = TeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}