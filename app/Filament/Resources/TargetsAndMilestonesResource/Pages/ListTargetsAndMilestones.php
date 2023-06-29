<?php

namespace App\Filament\Resources\TargetsAndMilestonesResource\Pages;

use App\Filament\Resources\TargetsAndMilestonesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTargetsAndMilestones extends ListRecords
{
    protected static string $resource = TargetsAndMilestonesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
