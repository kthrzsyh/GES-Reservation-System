<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Code;

class Kursi extends Model
{
    use HasFactory;
    protected $table = 'tb_kursi';

    public function code()
    {
        return $this->belongsTo(Code::class, 'code_id');
    }
}
