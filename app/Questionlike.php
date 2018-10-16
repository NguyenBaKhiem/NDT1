<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionlike extends Model
{
	protected $table = "questionlikes";
	public function user()
	{
		return $this->belongsTo('App\User', 'idUser', 'id');
	}
	public function question()
	{
		return $this->belongsTo('App\Question', 'idQuestion', 'id');
	}
}
