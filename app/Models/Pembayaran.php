<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'pembayaran'; // Menetapkan nama tabel
    protected $primaryKey = 'id_pembayaran';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'peserta_didik_id',
        'jumlah',
        'tanggal_pembayaran',
        'metode_pembayaran',
        'keterangan',
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'peserta_didik_id');
    }
}
