<?php

namespace App\Filament\Resources\UpdateAndHappeningResource\Pages;

use App\Filament\Resources\UpdateAndHappeningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpdateAndHappenings extends ListRecords
{
    protected static string $resource = UpdateAndHappeningResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
