<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UServiceCategory extends Model
{
    protected $table = 'u_service_category';

    protected $fillable = [
      'title', 'css_color',
    ];
}
