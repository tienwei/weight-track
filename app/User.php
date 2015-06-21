<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   * Descript: one use has many sessions
   */
  public function session() {
    return $this->hasMany('App\Session');
  }
}