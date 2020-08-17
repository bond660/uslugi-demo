<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class UServiceRequest extends Model
{
    protected $table = 'u_service_request';

    protected $fillable = [
      'user_id', 'service_id',
      'user_text', 'status',
    ];

    const STATUS_NEW = 0;
    const STATUS_WORK = 1;
    const STATUS_COMPLETE = 2;
    const STATUS_CLOSE = 3;
    const STATUS_CANCEL = 4;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(UService::class, 'id');
    }
}
