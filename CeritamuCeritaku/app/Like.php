<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
     /**
     * Get the phone record associated with the user.
     */
    protected $table = "like";
    protected $fillable = ['user_id','cerita_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function cerita()
    {
        return $this->belongsTo('App\Cerita');
    }

}
