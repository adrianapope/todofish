<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   protected $fillable = [
   		'name',
   		'description',
   		'status',
   ];


   /**
   * A task is owned by a user.
   *
   * @return \Illuminate\Database\Eloquent\Retlations\BelongsTo
   */
    public function user()
    {
    	return $this-belongsTo('App\User');
    }
}
