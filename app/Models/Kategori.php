<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    // app/Models/Kategori.php
    public function produks()
    {
        return $this->hasMany(Produk::class);
    }

}
