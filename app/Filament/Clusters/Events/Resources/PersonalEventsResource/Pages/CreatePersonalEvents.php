<?php

namespace App\Filament\Clusters\Events\Resources\PersonalEventsResource\Pages;

use App\Filament\Clusters\Events\Resources\PersonalEventsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePersonalEvents extends CreateRecord
{
    protected static string $resource = PersonalEventsResource::class;
}
