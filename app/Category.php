<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Category relations with budget, each category has one or more budget.
     *
     * @var array
     */
    public function budgets()
    {
        return $this->hasMany('App\Budget');
    }
}
