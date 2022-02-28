<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anak_asuh extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_anak', 
        'tgl_lahir', 
        'jenis_kelamin', 
        'pendidikan', 
        'nama_ortu_wali'
    ];
    function image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return asset('images/post/' . $this->image);
        else
            return asset('images/no_images.jpg');
    }

    function delete_image()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->image)))
            return unlink(public_path('images/post/' . $this->image));
    }
}
