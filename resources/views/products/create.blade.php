<x-layout>
    <h1>New Product</h1>

    <x-errors />

    <form action="{{ route('products.store') }}" method="POST">

        <x-products.form />

    </form>

</x-layout>