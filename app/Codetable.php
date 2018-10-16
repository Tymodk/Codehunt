<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Codetable extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'code1', 'code2', 'code3', 'code4', 'code5',
    ];
      public function user()
    {
    	return $this->belongsTo('App\User');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
