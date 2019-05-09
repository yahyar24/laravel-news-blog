<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_name' , 'contact_number' , 'contact_email' , 'address','iphone',
'iphone_b','anderwed','anderwed_b','rebot','rebot_b' ,'esay','esay_b' , 'amet' ,'amet_bo' ,'amet_b'];
}
