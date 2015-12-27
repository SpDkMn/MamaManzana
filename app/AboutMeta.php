<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class AboutMeta extends Model
{
    protected $table = 'about_meta';

    public function about()
    {
        return $this->belongsTo('MamaManzana\About');
    }
}
