<?php

namespace Firefly\FilamentBlog\Resources\CategoryResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Firefly\FilamentBlog\Resources\CategoryResource;

class ListCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
