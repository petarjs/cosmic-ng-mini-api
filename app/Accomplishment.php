<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomplishment extends Model
{
  protected $fillable = ['description', 'date', 'coffees', 'beers'];
  
  public function user() {
    return $this->belongsTo('\App\User');
  }
}
