<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHarian extends Model
{
    use HasFactory;
    protected $fillable = ['pegawai_id', 'log_text', 'status'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
