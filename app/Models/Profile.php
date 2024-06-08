<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = ['nama','no_hp','moto','id_user'];

    public function users()
    {
        return $this->belongsTo(User::class); // Relasi ke model User
    }

}
