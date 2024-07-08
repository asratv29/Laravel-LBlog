<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
   // protected $fillable = ['category_id','title', 'slug', 'excerpt', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters) {
       // $posts = Post::latest();
       $query->when($filters['search'] ?? false, fn($query, $search) => $query
                    ->where('title', 'like', '%' .$search . '%')
                    ->orWhere('body', 'like', '%' .$search . '%'));
        
        $query->when($filters['category'] ?? false, fn($query, $category) => $query
                    ->whereHas('category', fn($query)=>$query->where('slug',$category)));
        
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
