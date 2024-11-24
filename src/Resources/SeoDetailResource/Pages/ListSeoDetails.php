<?php

namespace Firefly\FilamentBlog\Resources\SeoDetailResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Firefly\FilamentBlog\Resources\SeoDetailResource;

class ListSeoDetails extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = SeoDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
