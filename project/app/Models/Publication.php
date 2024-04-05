<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $guarded=[

    ];

    function User(){
        return $this->belongsTo(User::class, 'users_id');
    }

    function Type(){
        return $this->belongsTo(TypePublication::class, 'type_publications_id');
    }
}
