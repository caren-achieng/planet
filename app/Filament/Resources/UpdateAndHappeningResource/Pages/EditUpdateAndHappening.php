<?php

namespace App\Filament\Resources\UpdateAndHappeningResource\Pages;

use App\Filament\Resources\UpdateAndHappeningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpdateAndHappening extends EditRecord
{
    protected static string $resource = UpdateAndHappeningResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
