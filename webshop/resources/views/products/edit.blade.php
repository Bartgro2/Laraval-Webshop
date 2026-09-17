<x-app-layout>
    <section class="max-w-2xl p-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <div class="container px-6 py-16 mx-auto">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Update Product</h2>

            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-4 mt-3 sm:grid-cols-2">
                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="name">Product Name</label>
                        <input id="name" name="name" type="text" value="{{ $product->name }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="price">Price</label>
                        <input id="price" name="price" type="number" step="0.01" value="{{ $product->price }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="text-gray-700 dark:text-gray-200" for="description">Description</label>
                        <textarea id="description" name="description" rows="3"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">{{ $product->description }}</textarea>
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="category_id">Category</label>
                        <select id="category_id" name="category_id"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            @if ($categories->isEmpty())
                                <option value="">No categories available</option>
                            @else
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="brand_id">Brand</label>
                        <select id="brand_id" name="brand_id"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                            @if ($brands->isEmpty())
                                <option value="">No brands available</option>
                            @else
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ $product->brand_id == $brand->id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="color">Color</label>
                        <input id="color" name="color" type="text" value="{{ $product->color }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="material">Material</label>
                        <input id="material" name="material" type="text" value="{{ $product->material }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label for="image" class="block text-sm text-gray-500 dark:text-gray-300">Image</label>
                        <input id="image" name="image" type="file" value="{{ $product->image }}"
                            class="block w-full px-2 py-1 mt-1 text-sm text-gray-600 bg-white border border-gray-200 rounded-lg file:bg-gray-200 file:text-gray-700 file:text-sm file:px-3 file:py-0.5 file:border-none file:rounded-full dark:file:bg-gray-800 dark:file:text-gray-200 dark:text-gray-300 placeholder-gray-400/70 dark:placeholder-gray-500 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:focus:border-blue-300" />
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="stock_quantity">Stock Quantity</label>
                        <input id="stock_quantity" name="stock_quantity" type="number" min="0"
                            value="{{ $product->stock_quantity }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="size">Size</label>
                        <input id="size" name="size" type="text" value="{{ $product->size }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>

                    <div>
                        <label class="text-gray-700 dark:text-gray-200" for="sku">SKU</label>
                        <input id="sku" name="sku" type="text" value="{{ $product->sku }}"
                            class="block w-full px-3 py-1.5 mt-1 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                    </div>
                </div>

                <div class="flex justify-start mt-6">
                    <button type="submit"
                        class="inline-flex items-center rounded-lg bg-blue-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Update product
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
