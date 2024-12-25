<?php

namespace App\Filament\Resources\SisterCompanyResource\Pages;

use App\Filament\Resources\SisterCompanyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSisterCompanies extends ListRecords
{
    protected static string $resource = SisterCompanyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
