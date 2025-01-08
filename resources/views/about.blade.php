<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Finsweet</title>
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />

    <main class="about-main">
        <div class="container">
            <h1>About Us</h1>
            <div class="about-content">
                <p>Your about content here</p>
            </div>
            <x-authors :authors="$authors" />
            <x-testimonials :testimonials="$testimonials" />
        </div>
    </main>

    <x-footer />
</body>
</html>