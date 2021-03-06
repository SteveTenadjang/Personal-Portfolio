<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfilerEmail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'profiler_emails';

    protected $fillable = [
        'profiler_email',
        'email_description',
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

    public function emailAttributes(): array
    {
        return [
            'profiler_email',
            'email_description',
            'profiler_info_id',
            'created_at',
            'updated_at',
        ];
    }
}
