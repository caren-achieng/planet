<?php

namespace App\Filament\Resources\SiteIdentityResource\Pages;

use App\Filament\Resources\SiteIdentityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSiteIdentity extends CreateRecord
{
    protected static string $resource = SiteIdentityResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
