<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function ipnu()
    {
        // Fetch categories and popular posts from the database
        $categories = Category::all(); // You can change this query based on your requirements
        $totalCategoriesCount = $categories->count();

        // Fetch popular posts (You can adjust this query based on your needs)
        $popularPosts = Post::orderBy('visits', 'desc')->take(5)->get();  // Example for most popular posts

        // Pass data to the view
        return view('profile.ipnu', [
            'categories' => $categories,
            'totalCategoriesCount' => $totalCategoriesCount,
            'popularPosts' => $popularPosts,
        ]);
    }
    // Show the IPPNU profile view
    public function ippnu()
    {
        $categories = Category::all(); // You can change this query based on your requirements
        $totalCategoriesCount = $categories->count();

        // Fetch popular posts (You can adjust this query based on your needs)
        $popularPosts = Post::orderBy('visits', 'desc')->take(5)->get();  // Example for most popular posts

        // Pass data to the view
        return view('profile.ippnu', [
            'categories' => $categories,
            'totalCategoriesCount' => $totalCategoriesCount,
            'popularPosts' => $popularPosts,
        ]);
    }
}
