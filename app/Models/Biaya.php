<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_biaya';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'instansi_id',
        'nama',
        'jumlah',
        'deskripsi',
        'tanggal',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }
}
