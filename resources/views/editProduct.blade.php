
@extends('layouts.main')

@section('container')
<div class="flex justify-center items-center">
    <div class=" bg-teal-500 rounded-md w-1/2 mx-5 my-5">
        <!-- Di dalam file blade Laravel -->
        <h1 class=" uppercase text-2xl font-bold text-slate-100 text-center my-5">edit product</h1>
<form action="{{ route('product.update', $product->id) }}" method="Post" enctype="multipart/form-data" class="max-w-md mx-auto my-5">
    @csrf <!-- Laravel CSRF Protection -->
    @method('PUT') <!-- Jika Anda menggunakan metode PUT untuk mengupdate data -->

    <div class="mb-4">
        <label for="product_code" class="block text-gray-700 text-sm font-bold mb-2">Product Code:</label>
        <input type="text" id="product_code" name="product_code" value="{{ $product->product_code }}" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Name:</label>
        <input type="text" id="product_name" name="product_name" value="{{ $product->product_name }}" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="product_brand" class="block text-gray-700 text-sm font-bold mb-2">Product Brand:</label>
        <input type="text" id="product_brand" name="product_brand" value="{{ $product->product_brand }}" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantity:</label>
        <input type="text" id="quantity" name="quantity" value="{{ $product->quantity }}" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
        <input type="text" id="price" name="price" value="{{ $product->price }}" class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-indigo-500">
    </div>

    <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-700">Edit</button>
    
    <a class=" ml-2 px-4 py-2 border border-indigo-500 bg-indigo-500 text-white rounded hover:bg-indigo-700" href="/tablestock">Cancle</a>
</form>

    </div>
</div>
@endsection