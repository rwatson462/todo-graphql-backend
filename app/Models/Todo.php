<?php

namespace App\Models;

use App\Enums\TodoStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = ['id'];

    protected $attributes = [
        'status' => TodoStatus::New->value,
    ];

    protected $fillable = [
        'title',
        'status',
    ];

    /**
     * @return BelongsTo<User>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
