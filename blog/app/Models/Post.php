<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //Post::factory()

    protected $guarded = [];
    protected $with = ['category', 'author']; //Default post query to staop n + 1 problem.

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function author() //Change this to author from user. Foreign key id
    {
        return $this->belongsTo(User::class, 'user_id');
    } 


    /*public function getRouteKeyName()
    {
        return 'slug';
    }*/ //Old way to declare key for the URI. 

}
