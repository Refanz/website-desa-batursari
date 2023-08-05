<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilPerangkatDesa extends Model
{
    use HasFactory;

    protected $table = 'tb_profil_perangkat_desa';

    protected $guarded = ['id'];
}
