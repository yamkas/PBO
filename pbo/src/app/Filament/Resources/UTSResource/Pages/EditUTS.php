<?php

namespace App\Filament\Resources\UTSResource\Pages;

use App\Filament\Resources\UTSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUTS extends EditRecord
{
    protected static string $resource = UTSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
