<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemperatureLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'sensor_uuid',
        'value',
        'unit'
    ];

    public function sensor ()
    {
        return $this->belongsTo(Device::class, 'sensor_uuid', 'uuid');
    }
}
