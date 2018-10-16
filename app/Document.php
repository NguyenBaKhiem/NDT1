<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
	protected $table = "documents";
	public function subject()
	{
		return $this->belongsTo('App\Subject', 'idSubject', 'id');
	}
	public function user()
	{
		return $this->belongsTo('App\Admin', 'idAdmin', 'id');
	}
}
