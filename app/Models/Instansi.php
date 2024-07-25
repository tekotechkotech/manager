<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'instansi'; // Menetapkan nama tabel
    protected $primaryKey = 'id_instansi';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'nama',
        'alamat',
        'telepon',
        'email',
    ];

    public function cabang()
    {
        return $this->hasMany(InstansiCabang::class, 'instansi_id');
    }

    public function biaya()
    {
        return $this->hasMany(Biaya::class, 'instansi_id');
    }
}
