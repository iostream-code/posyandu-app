<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Timbangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'tanggal_lahir',
        'umur',
        'nama_orangtua',
        'lingkar_kepala',
        'tinggi_badan',
        'berat_badan',
        'tanggal_periksa'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
