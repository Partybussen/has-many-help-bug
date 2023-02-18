<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Booking extends Resource
{
    public static $model = \App\Booking::class;

    public function fields(NovaRequest $request)
    {
        return [
            ID::make(),

            BelongsTo::make('Departure'),
        ];
    }
}
