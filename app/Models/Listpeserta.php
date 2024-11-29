<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listpeserta extends Model
{
    use HasFactory;

    protected $table = "listpesertas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'namalengkap', 'nik', 'tgl_lahir', 'tempat_lahir', 'alamat', 'desa', 'no_hp'
    ];
}
