<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $table = 'tbl_produk';
    
    protected $primaryKey = 'id';

    protected $fillable = [
            'nama_produk', 
            'image', 
            'harga', 
            'stock', 
        ];
}