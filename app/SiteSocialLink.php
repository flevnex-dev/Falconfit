<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteSocialLink extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table='site_social_links';
}
        