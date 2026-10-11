<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terapis extends Model
{
    protected $table = 'terapis';

    protected $primaryKey = 'terapis_id';

    protected $fillable = [
        'nama_terapis',
        'phone',
        'status',
    ];
}
