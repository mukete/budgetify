<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    /**
     * Schools relations with departments, each school has one or more departments.
     *
     * @var array
     */
    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
