<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * Departmenr relations with users, each department has one or more users.
     *
     * @var array
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Departments relation with schools. a department belong to a school.
     *
     * @var array
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    /**
     * Department relations with budget, each department has one or more budgets.
     *
     * @var array
     */
    public function budgets()
    {
        return $this->hasMany('App\Budget');
    }
}
