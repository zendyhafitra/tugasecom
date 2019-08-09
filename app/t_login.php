<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class t_login extends Authenticatable
{
    use Notifiable;

    use Notifiable;
    
	public $table = 't_login';

    protected $fillable = [
        'username', 'password',
    ];
}