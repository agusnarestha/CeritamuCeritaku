<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    protected $table = "cerita";
    protected $fillable = ['judul','sipnosis','gambar','isi_cerita','genre','user_id'];

    public function cerita()
    {
        return $this->belongsTo(User::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
}
