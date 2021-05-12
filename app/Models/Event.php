<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'tb_even';

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'id_even');
    }
}
