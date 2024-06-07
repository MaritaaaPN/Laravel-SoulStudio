<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id_artist';
    public $incrementing = true;
    protected $fillable = ['nama', 'lahir', 'bangsa','gaya', 'bio'];
    public $timestamps = false;
}