<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    // protected $fillable = ['provinis_id', 'nama'];

    // public function provinsi()
    // {
    //     return $this->belongsTo(Provinsi::class);
    // }
    use HasFactory;

    protected $fillable = ['nama'];
}
