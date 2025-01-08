@props(['testimonials'])

<section class="testimonials">
    <div class="container">
        <h2>What People Say About Us</h2>
        @if(isset($testimonials) && $testimonials->isNotEmpty())
            <div class="testimonial-list">
                @foreach($testimonials as $testimonial)
                    <div class="testimonial-card">
                        <p>{{ $testimonial->content }}</p>
                        <div class="testimonial-author">
                            <img src="{{ asset($testimonial->author_image) }}" alt="{{ $testimonial->author_name }}">
                            <h4>{{ $testimonial->author_name }}</h4>
                            <p>{{ $testimonial->author_title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No testimonials available.</p>
        @endif
    </div>
</section>