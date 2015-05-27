<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

  // These fields can be mass assigned
	protected $fillable = [
    'title',
    'body',
    'published_at',
    'user_id', // temporary.
  ];

  protected $dates = ['published_at'];

  public function scopePublished($query) {
    $query->where('published_at', '<=', Carbon::now());
  }

  public function scopeUnpublished($query) {
    $query->where('published_at', '>', Carbon::now());
  }

  // Adds the current time to the published date field.
  public function setPublishedAtAttribute($date) {
    $this->attributes['published_at'] = Carbon::parse($date);
  }

  // An article is owned by a user.
  public function user() {
    return $this->belongsTo('App\User');
  }

}
