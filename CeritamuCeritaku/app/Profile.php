<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    protected $table = "profiles";
    protected $fillable = ['bio','instagram','twitter','tgl_lahir'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
