<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'katalog_produk';
    protected $fillable = ['nama','kategori','harga','foto','model','desc'];
}
