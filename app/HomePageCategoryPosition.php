<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePageCategoryPosition extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='home_page_category_positions';
}
        