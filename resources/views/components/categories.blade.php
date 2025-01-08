@props(['categories'])

<section class="categories">
    <div class="container">
        <h2>Choose a Category</h2>
        @if(isset($categories) && $categories->isNotEmpty())
            <ul>
                @foreach($categories as $category)
                    <li>
                        <h3>{{ $category->name }}</h3>
                        <p>{{ $category->icon }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No categories available.</p>
        @endif
    </div>
</section>