<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
}


public function image()
    {
        if ($this->image && file_exists(public_path('image/kegiatan/' . $this->image))) {
            return asset('image/kegiatan/' . $this->image);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/kegiatan/' . $this->image))) {
            return unlink(public_path('image/kegiatan/' . $this->image));
        }
    }
}