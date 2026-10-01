<x-app-layout>
    <div class="container px-6 py-16 mx-auto">
        <div class="items-center lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-4xl">Best place to choose
                        <br> your <span class="text-blue-500 ">clothes</span>
                    </h1>

                    <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.
                    </p>

                    <button
                        class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        Shop Now
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full h-full lg:max-w-3xl" src="https://merakiui.com/images/components/Catalogue-pana.svg"
                    alt="Catalogue-pana.svg">
            </div>
        </div>
    </div>
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($products as $product)
                    <div class="max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <div class="px-4 py-2">
                            <h1 class="text-xl font-bold text-gray-800 uppercase dark:text-white">{{ $product->name }}
                            </h1>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ $product->description ?? 'No description available' }}</p>
                        </div>
                        <a href="{{ route('products.show', $product->id) }}">
                            <img class="object-cover w-full h-48 mt-2"
                                src="{{ $product->image_url ?? 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=320&q=80' }}"
                                alt="{{ $product->name }}">
                        </a>
                        <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                            <h1 class="text-lg font-bold text-white">${{ number_format($product->price, 2) }}</h1>
                            <button
                                class="px-2 py-1 text-xs font-semibold text-gray-900 uppercase transition-colors duration-300 transform bg-white rounded hover:bg-gray-200 focus:bg-gray-400 focus:outline-none">Add
                                to cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
