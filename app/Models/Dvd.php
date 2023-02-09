<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    use HasFactory;
    protected $table = 'dvd';
    protected $fillable = ['nama', 'nomor', 'alamat', 'berat', 'layanan'];
}
