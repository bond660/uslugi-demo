<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UService extends Model
{
    protected $table = 'u_service';

    protected $fillable = [
      'category_id',
      'title', 'description',
      'fa_icon', 'is_off',
      'min_days', 'max_days',
    ];
}
