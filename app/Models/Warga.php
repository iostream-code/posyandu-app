<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'NIK',
        'tanggal_lahir',
        'no_telp', 
        'alamat',
        'pekerjaan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
