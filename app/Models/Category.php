<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #one to Many
    public function houses()
    {
        return $this->hasMany(House::class);
    }


    #one to Many Iverse
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    #one to Many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }


}
