<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstansiCabang extends Model
{
    use HasFactory, HasUuids;

    protected $primaryKey = 'id_instansi_cabang';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'instansi_id',
        'nama',
        'alamat',
        'telepon',
        'email',
    ];

    public function instansi()
    {
        return $this->belongsTo(Instansi::class, 'instansi_id');
    }
}
