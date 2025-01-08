@props(['authors'])

<section class="authors">
    <div class="container">
        <h2>List of Authors</h2>
        @if(isset($authors) && $authors->isNotEmpty())
            <div class="author-list">
                @foreach($authors as $author)
                    <div class="author-card">
                        <img src="{{ asset($author->profile_picture) }}" alt="{{ $author->name }}" class="author-image">
                        <h3>{{ $author->name }}</h3>
                        <p>{{ $author->bio }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p>No authors found.</p>
        @endif
    </div>
</section>