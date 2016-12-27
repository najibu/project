<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];
    
    public function card()
    {
      return $this->belongsTo(Card::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    // public function by(User $user)
    // {
    //   return $this->user_id = $user->id;
    // }
}
