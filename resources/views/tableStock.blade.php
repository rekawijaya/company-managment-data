@extends('layouts.main')

@section('container')
    <div class=" w-auto px-4 py-4">
        <h1 class=" text-3xl font-bold py-3">Inventory Data</h1>
        <form class="flex gap-2 w-full mb-2" action="{{ route('product.search') }}" method="GET">
            <input type="text" name="query" id="query" class="py-2 px-5 border-2 border-slate-400 rounded w-10/12 font-semibold text-xl" value="{{ Request('query') }}" placeholder="Search product.." name="search-product" id="search-product" autofocus>
            <button class="bg-slate-800 rounded py-1 px-1 w-28 flex justify-center items-center" type="submit" name="search"><i data-feather="search" class="text-white"></i></button>
        </form>
        <a class=" py-1 px-2 bg-violet-600 rounded text-white font-semibold mb-4 hover:bg-red-500" href="{{ route('product.add.view') }}">Add Product</a>
        <a class=" py-1 px-2 bg-sky-600 rounded text-white font-semibold mb-4 hover:bg-red-500" href="{{ route('table') }}">All Product</a>
        <table class="min-w-full mt-2 ">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-teal-800 text-leading-4 font-medium text-white uppercase tracking-wider">No</th>
                    <th class="px-6 py-3 bg-teal-800 text-center text-leading-4 font-medium text-white uppercase tracking-wider">Product Code</th>
                    <th class="px-6 py-3 bg-teal-800 text-center text-leading-4 font-medium text-white uppercase tracking-wider">Product Name</th>
                    <th class="px-6 py-3 bg-teal-800 text-center text-leading-4 font-medium text-white uppercase tracking-wider">Product Brand</th>
                    <th class="px-6 py-3 bg-teal-800 text-center text-leading-4 font-medium text-white uppercase tracking-wider">Quantity</th>
                    <th class="px-6 py-3 bg-teal-800 text-center text-leading-4 font-medium text-white uppercase tracking-wider">Price</th>
                </tr>
            </thead>
            <tbody id="search-results" class="bg-white">
                @foreach($data as $i => $product)
                    <tr>
                        <td class="px-6 py-4 text-sm border-y border-gray-400 uppercase text-center font-semibold bg-indigo-500 text-white">{{ $i + 1 }}</td>
                        <td class="px-6 py-4 text-md border-y text-center border-gray-400 uppercase font-bold text-red-500">{{ $product["product_code"] }}</td>
                        <td class="px-6 py-4 text-sm border-y text-center border-gray-400 uppercase font-semibold">{{ $product["product_name"] }}</td>
                        <td class="px-6 py-4 text-sm border-y text-center border-gray-400 uppercase font-semibold">{{ $product["product_brand"] }}</td>
                        <td class="px-6 py-4 text-sm border-y text-center border-gray-400 uppercase font-semibold">{{ $product["quantity"] }} PCS</td>
                        <td class="px-6 py-4 text-sm border-y text-center border-gray-400 font-semibold">Rp. {{ $product["price"] }}</td>
                        <td class=" bg-background border-none py-3">
                            <a id="button-edit" href="{{ route('product.edit', $product->id) }}" class="bg-lime-700 rounded-md px-5 py-3 ml-3 text-white font-semibold hover:bg-indigo-900">Edit</a>
                            <form action="{{ route('product.delete', $product->id) }}" method="post" class=" inline-flex">
                                @method('delete')
                                @csrf
                                <button type="submit" onclick="confirm('hapus product? ')" class="bg-red-500 rounded-md px-4 py-3 ml-3 text-white font-semibold hover:bg-indigo-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection