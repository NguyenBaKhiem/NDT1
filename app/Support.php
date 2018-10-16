<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
	protected $table = "supports";
	public function user()
	{
		return $this->belongsTo('App\User', 'idUser', 'id');
	}
}
