<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable= [
            'title', 'body', 'Image', 

    ];

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo('App\category');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    
    public function user() {
        
        
     return  $this->belongsTo('App\User');
            
    }
}
