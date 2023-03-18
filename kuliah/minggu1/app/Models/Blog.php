<?php

namespace App\Models;

use App\Models\DetailProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $fillable = ['title', 'content'];

    public function detailProfile(): BelongsTo
    {
        return $this->belongsTo(DetailProfile::class, 'detailprofile_id', 'id');
    }
}
