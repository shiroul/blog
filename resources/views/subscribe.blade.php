<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe - Finsweet</title>
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subscribe.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <x-header />

    <main class="subscribe-main">
        <div class="container">
            <h1>Subscribe to Our Newsletter</h1>
            <div class="subscribe-form">
                <form action="{{ route('subscribe.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <button type="submit">Subscribe Now</button>
                </form>
            </div>
        </div>
    </main>

    <x-footer />
</body>
</html>