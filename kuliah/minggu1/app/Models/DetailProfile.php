<?php

namespace App\Models;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailProfile extends Model
{
    use HasFactory;

    protected $table = 'detail_profile';
    protected $fillable = [
        'address',
        'nomor_tlp',
        'ttl',
        'foto'
    ];

    public function blog(): HasOne
    {
        return $this->hasOne(Blog::class);
    }
}
