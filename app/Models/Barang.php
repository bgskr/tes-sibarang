<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public $table = 'tb_barang';

    protected $primaryKey = 'id_barang';
    protected $guarded = ['id_barang'];

    protected $fillable = [
        'id_jenis_barang',
        'nama_barang',
        'harga',
        'stok'
    ];

    public function jenisBarang() {
        return $this->belongsTo(JenisBarang::class, 'id_jenis_barang', 'id_jenis_barang');
    }
}
