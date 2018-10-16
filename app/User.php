<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "users";
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function question()
    {
        return $this->hasMany('App\Question', 'idUser', 'id');

    }
        public function support()
    {
        return $this->hasMany('App\Question', 'idUser', 'id');

    }
    public function questioncomment()
    {
        return $this->hasMany('App\Questioncomment', 'idUser', 'id');
        
    }
    public function questionlike()
    {
        return $this->hasMany('App\Questionlike', 'idUser', 'id');
        
    }
    public function commentquestion()
    {
        return $this->hasManyThrough('App\Questioncomment', 'App\Question', 'idQuestion', 'idUser', 'id');
    }
    public function likequestion()
    {
        return $this->hasManyThrough('App\Questionlike', 'App\Question', 'idQuestion', 'idUser', 'id');
    }
}
