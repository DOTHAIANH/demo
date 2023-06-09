<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    public function Customer()
    {
    	return $this->belongsTo('App\Models\Customers', 'customer_id', 'id');
    }
}
