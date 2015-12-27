<?php

namespace MamaManzana;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';

    public function meta()
    {
        return $this->hasOne('MamaManzana\AboutMeta');
    }

    public function img()
    {
        return $this->hasOne('MamaManzana\AboutImg');
    }


}
