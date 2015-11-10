<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    public function meta()
    {
        return $this->hasOne('App\AboutMeta');
    }

    public function img()
    {
        return $this->hasOne('App\AboutImg');
    }


}
