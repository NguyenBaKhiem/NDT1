<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $table = "questions";
	public function user()
	{
		return $this->belongsTo('App\User', 'idUser', 'id');
	}
	public function questioncomment()
	{
		return $this->hasMany('App\Questioncomment', 'idQuestion', 'id');
	}
}
