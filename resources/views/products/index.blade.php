<x-layout>
    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New Product</a>

    <ul>
        @forelse ($products as $product)
            <li><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></li>
            <p>{{ $product->description }}</p>
            <span>{{ $product->size }}</span>
        @empty
            No Products
        @endforelse
    </ul>

    <div>
        {{ $products->links('vendor.pagination.simple-default') }}
    </div>

</x-layout>
