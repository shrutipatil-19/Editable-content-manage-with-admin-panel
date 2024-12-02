<?php

namespace App\Filament\Clusters\Events\Resources\PersonalEventsResource\Pages;

use App\Filament\Clusters\Events\Resources\PersonalEventsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersonalEvents extends EditRecord
{
    protected static string $resource = PersonalEventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
