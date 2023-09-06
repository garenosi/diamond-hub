<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\departments as Authenticatable;

class departments extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','manager','dept_name','location','file'];
}



