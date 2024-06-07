<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;
    protected $table = 'artworks';
    protected $primaryKey = 'id_artwork';
    public $incrementing = true;
    protected $fillable = ['foto', 'judul', 'artis','kategori', 'deskripsi'];
    public $timestamps = false;
}