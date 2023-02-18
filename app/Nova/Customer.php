<?php

namespace App\Nova;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class Customer extends Resource
{
    public static $model = \App\Customer::class;

    public function fields(NovaRequest $request)
    {
        return [
            ID::make(),

            HasMany::make('Bookings')
                ->help('Help text not showing')
        ];
    }
}
