<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
      /**
       * The primary key associated with the table.
       *
       * @var string
       */

      use HasFactory;
      protected $guarded = [];

      protected $table = 't_pesanan';
      protected $primaryKey = 'id';
      protected $fillable = ['no_pesanan', 'tanggal', 'nm_supplier', 'nm_produk', 'total'];
}
