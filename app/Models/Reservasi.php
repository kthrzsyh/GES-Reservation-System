<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $table = 'tb_reservasi';

    public function kursi()
    {
        return $this->belongsTo(Code::class, 'id_kursi');
    }
}
