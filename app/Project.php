<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'job',
        'image',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
