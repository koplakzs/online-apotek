<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'service_id';
    protected $fillable = [
        'nama_services',
        'deskripsi',
        'images',
        'kategori_id',
    ];
    // Relasi ke model Kategori
    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

}
