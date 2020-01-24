<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;

class News extends Resource
{
    public static $model = 'App\Models\News';
    public static $title = 'id';
    public static $search = [
        'id',
    ];

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Image::make('picture'),
            Text::make('heading'),
            Textarea::make('post'),
        ];
    }
}
