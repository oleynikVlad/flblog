<?php

namespace Firefly\FilamentBlog\Resources\CommentResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Firefly\FilamentBlog\Resources\CommentResource;

class CreateComment extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = CommentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
