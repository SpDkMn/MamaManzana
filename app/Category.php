<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function meta()
    {
        return $this->hasOne('App\CategoryMeta');
    }

    public function img()
    {
        return $this->hasOne('App\CategoryImg');
    }


}
