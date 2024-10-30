<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'tlp'
    ];

    public function pelnggan()
    {
        return $this->hasMany(Pelanggan::class, 'id_pelanggan');
    }
}
