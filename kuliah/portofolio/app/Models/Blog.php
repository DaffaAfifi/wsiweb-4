<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = ['title', 'content', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
