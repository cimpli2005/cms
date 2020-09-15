<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'description', 'content', 'image', 'published_at', 'category_id'
    ];

    /**
     * Delete post image from storage
     * 
     * @return Void
     */

    public function deleteImage()
    {
        Storage::delete($this->image);
    }

    /**
     * Table relationship between Post and Category
     * 
     * @return \App\Post
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
