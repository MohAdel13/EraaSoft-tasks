<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name'];

    public function posts(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public static function showCategory(int $category_id){
        $data = [];
        $category = Category::find($category_id);
        $posts = $category->posts;
        $data['category'] = $category;
        $data['posts'] = $posts;
        return $data;
    }

    public static function deleteCategory(int $category_id){
        self::destroy($category_id);
    }

    public static function addCategory(string $name){
        self::create([
            'name'=>$name
        ]);
    }

    public static function updateCategory(int $category_id, string $name){
        self::findOrFail($category_id)->update(['name'=> $name]);
    }
    
}
