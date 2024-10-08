<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Highlightcategoryproduct extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='high_light_category_products';
}
        