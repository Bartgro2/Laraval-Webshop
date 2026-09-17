<!-- Card component -->

@props(['title', 'content'])

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>
        <p class="card-text">{{ $content }}</p>
    </div>
</div>