<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = ['member_id', 'provider_user_id', 'provider'];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }
}
