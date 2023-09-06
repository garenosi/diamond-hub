<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\consumables as Authenticatable;

class consumables extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','category','consumable_name','item_no','model_no','status','quantity','purchase_date','purchase_cost','order_no','min_quantity','file','manufacturer','location'];
}



