<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;
use App\Models\Post;

class Comment extends Model
{
    const STATUS_REJECTED = -1;
    const STATUS_PENDING = 0;
    const STATUS_APPROVED = 1;

    public static function getStatus()
    {
        return [
            self::STATUS_PENDING  => 'Đang chờ duyệt',
            self::STATUS_APPROVED => 'Đã duyệt',
            self::STATUS_REJECTED => 'Hủy bỏ',
        ];
    }

    protected $table = 'comments';

    protected $fillable = [
        'email',
        'name',
        'post_id',
        'parent_id',
        'content',
        'status'
    ];

    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }

    public function post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }



    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->where('status', Comment::STATUS_APPROVED);
    }

}