<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbuHamil extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nama',
        'kehamilan_ke',
        'umur_kehamilan',
        'golongan_darah',
        'tinggi_badan',
        'berat_badan',
        'tanggal_kehamilan'
    ];

    public function datas()
    {
        return $this->hasMany(Data::class);
    }
}
