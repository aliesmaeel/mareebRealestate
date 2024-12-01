<?php

namespace App\Filament\Resources\HomePageImageResource\Pages;

use App\Filament\Resources\HomePageImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomePageImage extends EditRecord
{
    protected static string $resource = HomePageImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
