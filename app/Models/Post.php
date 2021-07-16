<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;


class Post extends Model
{
    use AsSource, Attachable, Filterable;

    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];
}
