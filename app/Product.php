<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    protected $table = 'product';
	
	protected $primaryKey = 'id';
	
	public $incrementing = false;
	
	public $timestamps = true;
  
    protected $fillable = [
        'id', 'category_category_id', 'description','name', 'image_path', 'price', 'type', 'amount', 'barcode', 'unit_id'
    ];

    /**
     * Get the post that owns the comment.
     */
    public function category_category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the post that owns the comment.
     */
    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
}
