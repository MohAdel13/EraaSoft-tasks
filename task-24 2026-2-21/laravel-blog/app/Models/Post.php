<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'posted_by',
        'category_id',
        'title',
        'description',
        'image'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'posted_by', 'id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }

    public static function show(int $post_id){
        $data = [];
        $post = self::find($post_id);
        $data['post'] = $post;
        $data['next'] = is_null($post)?null:$post->category->posts->where('id', '>', $post_id)->first();
        $data['previous'] = is_null($post)?null:$post->category->posts->where('id', '<', $post_id)->first();
        $data['trending'] = self::trending();
        $data['categories'] = Category::all();
        return $data;
    }

    public static function trending(){
        return self::withCount(['comments'=>function($query){
            $query->where('created_at', '>=', now()->subDays(7));
        }])->orderBy('comments_count', 'desc')->take(5)->get();
    }

    public static function index(){
        $data = [];
        $posts = self::orderBy('created_at', 'desc')->paginate(16);
        $trending = self::trending();
        $data['posts'] = $posts;
        $data['trending'] = self::trending();
        return $data;
    }
}
