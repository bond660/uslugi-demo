<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
