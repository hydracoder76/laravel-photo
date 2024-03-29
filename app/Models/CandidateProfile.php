<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateProfile extends Model
{
  public function country() {
    return $this->belongsTo('App\Models\Country');
  }
  public function state() {
    return $this->belongsTo('App\Models\State');
  }
}
