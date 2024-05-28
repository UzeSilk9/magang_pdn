<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    use HasFactory;
    protected $table = 'pelajaran';
    protected $fillable = ['namamapel','guru','kelas','jadwal','gambarbuku'];
}
