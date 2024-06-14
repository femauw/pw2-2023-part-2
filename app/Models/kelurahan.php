<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelurahan extends Model
{
    use HasFactory;
    protected $table = "kelurahans";

    protected $fillable = [
        'nama',
        'kecamatan_id',
    ];

    public $timestamps = false;
}
