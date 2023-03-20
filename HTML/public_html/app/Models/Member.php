<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Orders\Order;
use App\Models\BillPayments;

class Member extends Authenticatable
{
    protected $table = 'members';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'user_name',
        'email',
        'account_balance',
        'password',
        'status'
    ];

    const STATUS_ACTIVE = 1;
    const STATUS_DISABLE = 2;

    public static function getSatus()
    {
        return [
            self::STATUS_ACTIVE => 'Hoạt động',
            self::STATUS_DISABLE => 'Khóa',
        ];
    }

    public function getFullNameAttribute()
    {
        $string = "{$this->first_name} {$this->last_name}";
        return $string ?? 'N/A';
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'member_id', 'id');
    }

    public function recharge()
    {
        return $this->hasMany(BillPayments::class, 'member_id', 'id');
    }

}
