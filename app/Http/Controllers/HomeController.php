<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Author;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch data
        $featuredPost = Post::latest()->first();
        $allPosts = Post::latest()->take(5)->get();
        $categories = Category::all();
        $authors = Author::all();
        $testimonials = Testimonial::all();

        // Handle cases where $featuredPost is null
        if (!$featuredPost) {
            $featuredPost = (object) [
                'title' => 'No Featured Post Available',
                'excerpt' => 'Please create a post in the database to see the featured post.',
                'content' => 'Content will be shown here when a featured post is added.',
                'image' => 'default-image.jpg', // Replace with your default image path
            ];
        }

        return view('home', compact('featuredPost', 'allPosts', 'categories', 'authors', 'testimonials'));
    }
}
