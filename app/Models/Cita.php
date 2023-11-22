<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}