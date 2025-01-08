@props(['posts'])

<section class="all-posts">
    <div class="container">
        <h2>All Posts</h2>
        @if(isset($posts) && $posts->isNotEmpty())
            <ul>
                @foreach($posts as $post)
                    <li>
                        <h3>{{ $post->title }}</h3>
                        <p>{{ $post->excerpt }}</p>
                        <a href="#" class="read-more">Read More</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No posts available yet.</p>
        @endif
    </div>
</section>