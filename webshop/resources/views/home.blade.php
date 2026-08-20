<!-- load the partials file -->
@include('partials.header', ['header' => 'Welcome to the Webshop'])

@include('partials.navigation')

<!-- Display the products in a card -->
<!-- load the card component -->
@foreach ($products as $product)
    @include('components.card', ['title' => $product->name, 'content' => $product->description])
    @include('button', ['text' => 'View Product', 'url' => route('products.show', $product->id)])
@endforeach

@include('partials.footer')