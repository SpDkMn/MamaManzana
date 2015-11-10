<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutImg extends Model
{
    protected $table = 'about_img';

    public function about()
    {
        return $this->belongsTo('App\About');
    }
}
