<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    protected $fillable = ['kategori_id', 'nama', 'stok', 'harga'];
    
}
