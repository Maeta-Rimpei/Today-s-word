<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * 偉人名言とリレーション
     */
    public function words()
    {
        return $this->hasMany('App\Word');
    }
}
