<header class="header">
    <div class="container">
        <div class="logo">{Finsweet}</div>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact Us</a></li>
            </ul>
            <a href="{{ route('subscribe') }}" class="subscribe-btn">Subscribe</a>
        </nav>
    </div>
</header>