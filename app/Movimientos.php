<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    //
    protected $table="movimientos";

    protected $guarded = [];

    public function user ()
    {
    	return $this->belongsTo(User::class);
    }
}
