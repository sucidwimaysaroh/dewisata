<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $table = 'wisata';
    public function User()
    {
      return $this->belongsTo('App\User');
    }
}
