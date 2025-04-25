<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
