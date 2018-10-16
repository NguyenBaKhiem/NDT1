<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questioncomment extends Model
{
	protected $table = "questioncomments";
	public function user()
	{
		return $this->belongsTo('App\User', 'idUser', 'id');
	}
	public function question()
	{
		return $this->belongsTo('App\Question', 'idQuestion', 'id');
	}
}
