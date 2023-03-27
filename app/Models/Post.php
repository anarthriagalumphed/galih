<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // kode dibawah untuķ boleh sisanya yang gak boleh
    // protected $fillable = ['title', 'excerpt', 'body'];

    // kebalikan dari kode diats yang isi yang gaboleh sisanya boleh
    protected $guarded = ['id'];
}
