<?php

namespace Firefly\FilamentBlog\Resources\TagResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Firefly\FilamentBlog\Resources\TagResource;

class ListTags extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
