<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
     * Table relationship between Post and Category
     * 
     * @return \App\Category
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
