<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function childCategories()
    {
        return $this->hasMany('Category', 'parent_id', 'id');
    }
    
    public function parentCategory()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

}
