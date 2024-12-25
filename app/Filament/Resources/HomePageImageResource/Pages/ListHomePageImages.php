<?php

namespace App\Filament\Resources\HomePageImageResource\Pages;

use App\Filament\Resources\HomePageImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomePageImages extends ListRecords
{
    protected static string $resource = HomePageImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
