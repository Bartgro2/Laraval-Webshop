<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ __('Welcome to the Webshop!') }}
                </div>
            </div>
        </div>
    </div>

@foreach ($products as $product)
    @include('components.card', ['title' => $product->name, 'content' => $product->description])
    @include('button', ['text' => 'View Product', 'url' => route('products.show', $product->id)])
@endforeach


</x-app-layout>