<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\UServiceCategory;

class UService extends Model
{
    protected $table = 'u_service';

    protected $fillable = [
      'category_id',
      'title', 'description',
      'fa_icon', 'is_off',
      'min_days', 'max_days',
    ];

    public function category()
    {
        return $this->hasOne(UServiceCategory::class, 'id', 'category_id');
    }
}
