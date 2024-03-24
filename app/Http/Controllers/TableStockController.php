<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// oke
class TableStockController extends Controller
{
    public function showTable()
    {
        $products = Product::paginate(10);

        return view('tableStock', [
            "tittle" => "Table Stock",
            "data" => $products
        ]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('editProduct', [
            'product' => $product,
            'tittle' => 'Form Edit'
        ]);
    }

    public function addProductView()
    {
        return view('addProduct', [
            "tittle" => "add product"
        ]);
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_brand' => 'required|string',
            'quantity' => 'required|string',
            'price' => 'required|string',
        ]);

        Product::create([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'product_brand' => $request->product_brand,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('table',)->with('success', 'product has been added');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');

        $products = Product::where('product_name', 'like', '%' . $query . '%')
            ->orWhere('product_code', 'like', '%' . $query . '%')
            ->orWhere('product_brand', 'like', '%' . $query . '%')
            ->orWhere('quantity', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->paginate(10);

        return view('tablestock', [
            'tittle' => 'Table Stock',
            'data' => $products
        ]);
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'product_code' => 'required|string',
            'product_name' => 'required|string',
            'product_brand' => 'required|string',
            'quantity' => 'required|string',
            'price' => 'required|string',
        ]);

        // Temukan produk yang akan diupdate
        $product = Product::findOrFail($id);

        // Update data produk
        $product->update([
            'product_code' => $request->product_code,
            'product_name' => $request->product_name,
            'product_brand' => $request->product_brand,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        // Redirect ke halaman atau tindakan sesuai kebutuhan aplikasi Anda
        return redirect()->route('table')->with('success', 'Product updated successfully');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('table');
    }
}
