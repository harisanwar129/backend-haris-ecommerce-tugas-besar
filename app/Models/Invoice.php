<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table="invoice";
    protected $fillable = [
        'invoice', 'customer_id', 'kurir', 'kurir_servis', 'kurir_harga', 'berat', 'nama', 'nohp', 'kota_id', 'provinsi_id', 'alamat', 'status', 'grand_total', 'snap_token'
    ];
}
