<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Departure extends Resource
{
    public static $model = \App\Departure::class;

    public function fields(NovaRequest $request)
    {
        return [
            ID::make(),

            BelongsTo::make('Organiser', 'organiser', Customer::class)
                ->showWhenPeeking()
                ->searchable(),
        ];
    }
}
