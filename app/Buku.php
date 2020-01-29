<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='buku';
    protected $fillable = [
        'penulis', 'judul', 'kota','penerbit','tahun',
    ];
}
