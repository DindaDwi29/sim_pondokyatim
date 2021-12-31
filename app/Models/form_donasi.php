<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form_donasi extends Model
{
    use HasFactory;

    protected $fillable =['id','nama_donatur','email','no_telp', 'nominal', 'tgl_transfer', 'nama_bank', 'no_rek', 'transfer_ke_bank'];
    protected $visible =['id','nama_donatur','email','no_telp', 'nominal', 'tgl_transfer', 'nama_bank', 'no_rek', 'transfer_ke_bank'];

    public $timestamps = true;

    public function form_donasi()
    {
        return $this->hasMany('App\Models\form_donasi');
    }
}
