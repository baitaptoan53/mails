<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten',
        'vi_tri_lam_viec',
        'luong',
        'phong_ban'
    ];
}
