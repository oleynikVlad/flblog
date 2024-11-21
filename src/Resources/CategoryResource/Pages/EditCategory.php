<?php

namespace Firefly\FilamentBlog\Resources\CategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Firefly\FilamentBlog\Resources\CategoryResource;

class EditCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
