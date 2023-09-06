<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\accessories as Authenticatable;

class accessories extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','category','accessory_name','model_no','status','supplier','location','purchase_date','purchase_cost','order_no','min_quantity','file','manufacturer','location'];
}



