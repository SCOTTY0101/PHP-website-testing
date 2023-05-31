<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; //Post::factory()

    protected $guarded = [];

    protected $with = ['category', 'author']; //Default post query to staop n + 1 problem.

    public function scopeFilter($query, array $filters) //Post::newQuery()-filter(); //newFilter but use filter() 
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'))
    );
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            $query->whereHas('category', fn ($query) => 
                $query->where('slug', $category)
            )
        );
        
        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn ($query) => 
                $query->where('username', $author)
            )
        );
}

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
