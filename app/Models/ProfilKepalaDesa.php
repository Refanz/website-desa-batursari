<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilKepalaDesa extends Model
{
    use HasFactory;

    protected $table = 'tb_profil_kepala_desa';

    protected $guarded = ['id'];
}
