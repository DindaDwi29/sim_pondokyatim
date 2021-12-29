<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak_asuh extends Model
{
    use HasFactory;
    

    protected $fillable =['id','nama_anak','jk','tgl_lahir'];
    protected $visible =['id','nama_anak','jk','tgl_lahir'];

    public $timestamps = true;

    public function pengasuh()
    {
        return $this->hasMany('App\Models\anak_asuh');
    }
}
