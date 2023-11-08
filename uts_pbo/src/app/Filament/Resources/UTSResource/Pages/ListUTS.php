<?php

namespace App\Filament\Resources\UTSResource\Pages;

use App\Filament\Resources\UTSResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUTS extends ListRecords
{
    protected static string $resource = UTSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
