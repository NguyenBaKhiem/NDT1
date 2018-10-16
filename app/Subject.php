<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = "subjects";
    public function document()
    {
    	return $this->hasMany('App\Document', 'idSubject', 'id');
    }
}
