<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SejarahDesa extends Model
{
    use HasFactory;

    protected $table = "tb_sejarah_desa";

    protected $guarded = ['id'];
}
