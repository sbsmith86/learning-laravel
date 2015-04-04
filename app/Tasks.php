<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model {

  protected $fillable = [
    'title',
    'description',
    'published_at',
    'due_by',
    'complete'
  ];

}
