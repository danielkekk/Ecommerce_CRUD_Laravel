<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id','name', 'parent_id'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
