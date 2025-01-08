<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finsweet Home</title>
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />

    <!-- Featured Post Section -->
    <section class="featured-post">
        @if(isset($featuredPost) && $featuredPost)
            <div class="container">
                <h1>{{ $featuredPost->title }}</h1>
                <p>{{ $featuredPost->excerpt }}</p>
                <img src="{{ asset($featuredPost->image) }}" alt="Featured Post" class="featured-image">
                <a href="#" class="read-more">Read More</a>
            </div>
        @else
            <div class="container">
                <h1>No Featured Post Available</h1>
                <p>BANANA NUGET.</p>
            </div>
        @endif
    </section>

    <x-posts :posts="$allPosts" />
    
    <x-categories :categories="$categories" />
    
    <x-authors :authors="$authors" />
    
    <x-testimonials :testimonials="$testimonials" />

    <x-footer />
</body>
</html>