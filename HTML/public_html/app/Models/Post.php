<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Trails\ModelScopes;

class Post extends Model
{
	use ModelScopes; 

    protected $table = 'posts';

    protected $fillable = [ 
    	'name', 'slug' , 'desc' , 'content', 'image' , 'type' ,  'status' , 'meta_title' , 'meta_description' , 'meta_keyword', 'show_about', 
	];

	public function category()
    {
        return $this->belongsToMany('App\Models\Categories', 'post_category', 'id_post', 'id_category');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id', 'id')->where('comments.status', Comment::STATUS_APPROVED);
    }

}
