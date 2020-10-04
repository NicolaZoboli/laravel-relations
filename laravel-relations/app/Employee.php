<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    public $timestamps = false;

    protected $fillable = [

      'firstname',
      'lastname',
      'date_of_birth',
      'private_code',
      'location_id'
    ];

    public function location() {

      return $this -> belongsTo(Location::class);
    }

    public function tasks() {

      return $this -> belongsToMany(Task::class);
    }
}
