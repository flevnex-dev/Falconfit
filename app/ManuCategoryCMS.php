<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ManuCategoryCMS extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='manu_category_cmses';
}
        