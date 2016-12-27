<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function note()
    {
      return $this->hasMany(Note::class);
    }
}
