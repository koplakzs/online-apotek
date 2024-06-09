<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'kategori_id';
    protected $fillable = ["nama_kategori"];

    public function produks()
    {
        return $this->hasMany(Produk::class, "kategori_id");
    }
    public function services()
    {
        return $this->hasMany(Service::class, "kategori_id");
    }
}
