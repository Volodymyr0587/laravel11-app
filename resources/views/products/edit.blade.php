<x-layout>
    <h1>Edit Product {{ $product->name }}</h1>

    <x-errors />

    <form action="{{ route('products.update', $product) }}" method="POST">
        @method('PUT')
        <x-products.form :product="$product" />

    </form>


    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

</x-layout>
