<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatment';

    protected $primaryKey = 'treatment_id';

    protected $fillable = [
        'nama_treatment',
        'harga',
        'deskripsi',
    ];
}
