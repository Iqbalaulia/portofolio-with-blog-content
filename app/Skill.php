<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'range_skill',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
