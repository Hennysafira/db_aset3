<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;
    protected $table = 'ruangans';
    protected $fillable = [
        'nama_ruangan',
    ];
    public function asets()
    {
        return $this->hasMany(Aset::class, 'ruangan_id');
    }
}
