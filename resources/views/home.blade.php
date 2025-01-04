<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finsweet Header</title>
    <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo">{Finsweet}</div>
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Blog</a></li>
                    <li><a href="#" class="nav-link">About Us</a></li>
                    <li><a href="#" class="nav-link">Contact us</a></li>
                </ul>
                <button class="subscribe-btn">Subscribe</button>
            </nav>
        </div>
    </header>

    <section class='home-content'>
        BANANA NUGET
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-logo">{Finsweet}</div>
            <div class="footer-content">
                <div class="newsletter">
                    <p>Subscribe to our newsletter to get latest updates and news</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Enter Your Email" class="newsletter-input">
                        <button type="submit" class="newsletter-btn">Subscribe</button>
                    </form>
                </div>
                <div class="footer-nav">
                    <ul class="nav-list">
                        <li><a href="#" class="nav-link">Home</a></li>
                        <li><a href="#" class="nav-link">Blog</a></li>
                        <li><a href="#" class="nav-link">About Us</a></li>
                        <li><a href="#" class="nav-link">Contact us</a></li>
                        <li><a href="#" class="nav-link">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-info">
                <p>Finstreet 118 2561 Fintown</p>
                <p>Hello@finsweet.com 020 7993 2905</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
