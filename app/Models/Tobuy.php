<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tobuy extends Model
{
    use HasFactory;
    protected $table = 'tobuy';
    // protected $fillable = ['barang','harga'];
    protected $guarded = [];
}
