<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function posts()
   {
      protected $fillable = [
        'name'
      ];

      return $this->belongsToMany('App\Post');
   }
}
