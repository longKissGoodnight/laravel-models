<?php

namespace Phoenix\LaravelModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLog extends Model
{
    use HasFactory;

    protected $table = 'jobs_log';

    protected $fillable = ['data', 'server_name', 'status', 'started_at', 'completed_at'];

    protected $casts = [
        'data' => 'array',
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];
}
