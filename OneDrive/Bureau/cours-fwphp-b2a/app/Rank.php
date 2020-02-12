<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * Récupère les utilisateurs possédant cette compétences.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('level');
    }
    
    protected $fillable = [
      'rank',
      ];
}
