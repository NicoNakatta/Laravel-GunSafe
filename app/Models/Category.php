<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_jk';
    public $incrementing = true;
    protected $fillable = ['jenis_keamanan','harga'];
    public $timestamps = false;
}
