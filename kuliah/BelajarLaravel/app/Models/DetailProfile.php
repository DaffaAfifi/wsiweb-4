<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProfile extends Model
{
    use HasFactory;

    protected $table = 'detail_profile';

    protected $fillable = [
        'address',
        'no_tlp',
        'ttl',
        'foto'
    ];
}
