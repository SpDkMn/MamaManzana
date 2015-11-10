<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryImg extends Model
{
    protected $table = 'categories_img';

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
