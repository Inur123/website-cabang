<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{

public function index()
{
    $posts = Post::where('is_published', 1)->get();

    // Mengonversi 'published_at' ke objek Carbon jika diperlukan
    foreach ($posts as $post) {
        $post->published_at = Carbon::parse($post->published_at);
        $post->excerpt = Str::limit($post->content, 100); // Pastikan menjadi objek Carbon
    }

    foreach ($posts as $post) {
        $post->excerpt = Str::limit($post->content, 100); // Ambil 100 karakter pertama
    }
    $categories = Category::all();

    return view('blog.index', compact('posts','categories'));
}

public function show($slug)
{
    $categories = Category::take(10)->get();
    $totalCategoriesCount = Category::count();
    // Ambil postingan berdasarkan slug
    $post = Post::where('slug', $slug)->where('is_published', 1)->firstOrFail();

    // Ambil postingan terkait berdasarkan kategori
    $relatedPosts = Post::where('category_id', $post->category_id)  // Assuming category_id is a foreign key in the posts table
        ->where('is_published', 1)
        ->where('slug', '!=', $slug)  // Exclude the current post
        ->limit(3)  // Limit the number of related posts
        ->get();

    // Increment the visit count for the current post
    $post->increment('visits');

    // Fetch the 5 most popular posts (based on the highest number of visits)
    $popularPosts = Post::where('is_published', 1)
        ->orderBy('visits', 'desc')  // Order by visits
        ->limit(5)  // Limit to the top 5 posts
        ->get();

    return view('blog.detail', compact('post', 'categories','totalCategoriesCount', 'relatedPosts', 'popularPosts'));
}


}
