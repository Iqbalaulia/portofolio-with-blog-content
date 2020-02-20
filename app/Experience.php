<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    protected $fillable = [
        'user_id',
        'title',
        'type_of_work',
        'company',
        'location',
        'ex_start_year',
        'ex_end_year',
        'ex_description',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
