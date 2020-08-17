<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\UService;

class UServiceCategory extends Model
{
    protected $table = 'u_service_category';

    protected $fillable = [
      'title', 'css_color',
    ];

    public function services()
    {
        return $this->hasMany(UService::class, 'id', 'category_id');
    }
}
