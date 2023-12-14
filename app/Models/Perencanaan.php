<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perencanaan extends Model
{
    use HasFactory;
    protected $table = "perencanaan";
    protected $primaryKey = 'id';
    protected $fillable = ['kegiatan', 'sumberDana', 'mulai', 'akhir', 'pagu', 'penarikan', 'prodi'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
