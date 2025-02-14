<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Finsweet</title>
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />

    <main class="blog-main">
        <div class="container">
            <h1>Our Blog</h1>
            <x-posts :posts="$posts" />
            <x-categories :categories="$categories" />
        </div>
    </main>

    <x-footer />
</body>
</html>