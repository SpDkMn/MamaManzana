<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryMeta extends Model
{
    protected $table = 'categories_meta';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
