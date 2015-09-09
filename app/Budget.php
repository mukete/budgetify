<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    /**
     * Budget relation with departments. a budget belong to a department.
     *
     * @var array
     */
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    /**
     * Budget relation with category. a budget belong to a category.
     *
     * @var array
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
