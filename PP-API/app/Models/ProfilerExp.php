<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfilerExp extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profiler_exps';

    protected $fillable = [
        'job_title',
        'job_description',
        'company_name',
        'company_website',
        'job_start_date',
        'job_end_date',
        'profiler_info_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:U',
        'updated_at' => 'datetime:U',
        'deleted_at' => 'datetime:U',
    ];

    public function profilerInfo(): BelongsTo
    {
        return $this->belongsTo(profilerInfo::class);
    }

    public function expAttributes(): array
    {
        return [
            'job_title',
            'job_description',
            'company_name',
            'company_website',
            'job_start_date',
            'job_end_date',
            'profiler_info_id',
            'created_at',
            'updated_at',
        ];
    }
}
