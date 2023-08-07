<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanDesa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'tb_kegiatan_desa';
}
