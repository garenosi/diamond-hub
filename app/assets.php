<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\assets as Authenticatable;

class assets extends Model 
{
	use Notifiable;
    protected $fillable = ['company_name','asset_tag','asset_name','serial_no','model','status','supplier','location','purchase_date','purchase_cost','order_no','warranty','file'];
}



