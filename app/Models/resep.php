<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    protected $fillable = ['jenis_makanan', 'katagori_makanan', 'bahan_makanan'];
    protected $table = 'reseps';
    protected $primaryKey = 'id';

}
