<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

  protected $fillable = [

    'name',
    'description',
    'start_date',
    'end_date'
  ];

  public function employees() {

    return $this -> belongsToMany(Employee::class);
  }
}
