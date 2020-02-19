<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $fillable = [
        'user_id',
        'university',
        'degree',
        'field_study',
        'ed_start_year',
        'ed_end_year',
        'score',
        'ed_description',
        'image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
