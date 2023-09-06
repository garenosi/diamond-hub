<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\asset_requests as Authenticatable;

class asset_requests extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','asset_name','serial_no','manager_first_name','status','manager_last_name','manager_email'];
}



