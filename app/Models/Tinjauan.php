<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tinjauan extends Model
{
    use HasFactory;

    protected $table="tinjauan";
    protected $fillable = [
        'penilaian', 'tinjauan', 'produk_id', 'pesanan_id', 'customer_id'
    ];
}
