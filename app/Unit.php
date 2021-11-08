<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'unit';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id','name', 'unit'
    ];

    /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
