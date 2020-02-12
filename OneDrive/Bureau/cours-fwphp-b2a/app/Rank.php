<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * R�cup�re les utilisateurs poss�dant cette comp�tences.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('level');
    }
    
    protected $fillable = [
      'rank',
      ];
}
