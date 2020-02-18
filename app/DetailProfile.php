<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailProfile extends Model
{
    //

    protected $fillable = [
        'user_id',
        'date_birth',
        'address',
        'country',
        'email',
        'phone',
        'about_me',
        'project_complate',
        'facebook',
        'github',
        'instagram',
        'linkedin'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
