<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product; 
use App\Models\Category;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $products = Product::all();
            return view('product.list',['products'=> $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
            $this->validator($request->all())->validate();

            Product::create([
                'title' => $request['title'], 
                'category_id' => $request['category_id'], 
                'barcode' => $request['barcode'],
                'stock'=> $request['stock'],
                'price'=> $request['price'],
            ]);
            return redirect()->route('productlist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Ürün kayıt edildi.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        if (!$product) {
            // return redirect()->route('productedit', [2])->with('message','İşlem Başarılı değilll.');
            return redirect()->route('productlist')->with('swallMessages', ['icon' => 'error', 'title' => 'Uyarı', 'text' => 'Ürün bulunamadı']);
            // return abort(404);
        }
        return view('product.edit', compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
            return redirect()->route('productedit', [$id])->withErrors($validator)->withInput();

        }

        $product = Product::find($id);
        if (!$product) {
            return abort(404);
        }
        $product->title = $request -> input('title');
        $product->category_id = $request -> input('category_id');
        $product->barcode = $request -> input('barcode');
        $product->stock = $request -> input('stock');
        $product->price = $request -> input('price');
        $product->update();
        return redirect()->route('productedit', [$product->id])->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Ürün güncellendi']);
    }
    


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'], 
            'category_id' => [], 
            'barcode' => ['required', 'string', 'min:7',],
            'stock'=> ['required', 'string',],
            'price'=> ['required', 'string',],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('productlist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Ürün silindi.']);
    }
}
