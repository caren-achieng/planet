<?php

namespace App\Filament\Resources\SiteIdentityResource\Pages;

use App\Filament\Resources\SiteIdentityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSiteIdentity extends EditRecord
{
    protected static string $resource = SiteIdentityResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
