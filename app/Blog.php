<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    protected $fillable = [
        'users_id', 'title' , 'slug' , 'category' ,'image', 'content', 'date_blog' , 'tag'
    ];
    
    // protected $casts = [
    //     'tag' => 'array',
    // ];
    
   
    public function user(){
        return $this->belongsTo(User::class, 'users_id','id');
    }
    

}
