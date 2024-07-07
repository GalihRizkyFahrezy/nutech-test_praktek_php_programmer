<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = "barang";

    protected $fillable = ['namabarang','fotobarang','hargabeli','hargajual','stok'];

    const UPDATED_AT = null;
    const CREATED_AT = null;

}
