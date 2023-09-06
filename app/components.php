<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\components as Authenticatable;

class components extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','category','component_name','item_no','model_no','status','location','purchase_date','purchase_cost','order_no','min_quantity','file','manufacturer','location'];
}



