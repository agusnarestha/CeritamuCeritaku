<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = "komentar";
    protected $fillable = ['user_id','cerita_id','isi_komentar','nama'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function cerita()
    {
        return $this->belongsTo('App\Cerita');
    }
}
