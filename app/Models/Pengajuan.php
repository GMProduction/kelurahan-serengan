<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat',
        'jenis_surat_id',
        'user_id',
        'tanggal_awal',
        'tanggal_akhir',
        'keperluan',
        'keterangan',
        'status'
    ];

    /**
     * @return BelongsTo
     */
    public function jenis(){
        return $this->belongsTo(JenisSurat::class,'jenis_surat_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
