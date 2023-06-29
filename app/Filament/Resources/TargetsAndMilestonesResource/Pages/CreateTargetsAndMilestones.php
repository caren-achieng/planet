<?php

namespace App\Filament\Resources\TargetsAndMilestonesResource\Pages;

use App\Filament\Resources\TargetsAndMilestonesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTargetsAndMilestones extends CreateRecord
{
    protected static string $resource = TargetsAndMilestonesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
