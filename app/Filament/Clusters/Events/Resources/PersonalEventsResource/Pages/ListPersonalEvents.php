<?php

namespace App\Filament\Clusters\Events\Resources\PersonalEventsResource\Pages;

use App\Filament\Clusters\Events\Resources\PersonalEventsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPersonalEvents extends ListRecords
{
    protected static string $resource = PersonalEventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
