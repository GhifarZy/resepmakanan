<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class katagori extends Model
{
    protected $table = 'katagoris';
    protected $fillable = ['katagori', 'keterangan'];
    protected $primaryKey = 'id';
}
