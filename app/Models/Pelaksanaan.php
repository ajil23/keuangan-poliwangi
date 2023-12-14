<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    use HasFactory;
    protected $table = "pelaksanaan";
    protected $primaryKey = 'id';
    protected $fillable = ['kegiatan', 'progres', 'realisasi', 'laporan'];

    public function perencanaan(){
        return $this->belongsTo(Perencanaan::class,'perencanaan_id','id');
    }
}
