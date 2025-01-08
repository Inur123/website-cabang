<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Http\RedirectResponse;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    // Override method afterCreate untuk redirect ke halaman index

}
