<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarang extends Model
{
    use HasFactory;
    public $table = 'tb_jenis_barang';
    // protected $primaryKey = ['id_jenis_barang'];
    protected $primaryKey = 'id_jenis_barang';
    public $incrementing = true;
    // protected $keyType = 'bigInteger';

    protected $fillable = [
        'nama_jenis_barang'
    ];

    protected $guarded = ['id_jenis_barang'];
}
