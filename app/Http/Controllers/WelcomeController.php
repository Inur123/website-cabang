<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Fetch the popular posts based on views (you can adjust this logic)
        $popularPosts = Post::where('is_published', 1) // Ensure only published posts are fetched
            ->orderBy('visits', 'desc') // Sort by the views column in descending order
            ->take(3) // Limit to the top 3 most viewed posts
            ->get();

        // Return the view with the posts data
        return view('welcome', compact('popularPosts'));
    }
}
