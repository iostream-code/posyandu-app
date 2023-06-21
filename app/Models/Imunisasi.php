<?php

namespace App\Models;

use App\Models\Data;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Imunisasi extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nama',
        'tanggal_lahir',
        'jenis_imunisasi',
        'tanggal_imunisasi'
    ];

    public function datas()
    {
        return $this->hasMany(Data::class);
    }
}
