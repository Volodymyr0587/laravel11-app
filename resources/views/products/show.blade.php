<x-layout>

    <h1>Product: {{ $product->name }}</h1>

    <a href="{{ route('products.index') }}">All Products</a>

    <h4>{{ $product->name }}</h4>
    <p>{{ $product->description }}</p>
    <p>{{ $product->size }}</p>

    <a href="{{ route('products.edit', $product) }}">Edit</a>

</x-layout>
