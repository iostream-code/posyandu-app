<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Warga extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'user_id',
        'tanggal_lahir',
        'no_telp', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
