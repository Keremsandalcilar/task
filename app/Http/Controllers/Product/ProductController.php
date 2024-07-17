<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Product; 

class ProductController extends Controller
  
{
    public function showProductForm()
    {
        return view('product.product');
    }
    public function productcreate(Request $request)
    {
        $this->validator($request->all())->validate();
        $product = $this->create($request->all());
        return redirect()->route('productlist');
    }
    
    public function edit(Request $request)
    {
        $this->validator($request->all())->validate();
        $product = $this->create($request->all());
        return redirect()->route('productedit');
    }

        protected function validator(array $data)
    {
        return Validator::make($data, [
            'product_title' => ['required', 'string', 'max:255'], 
            'product_category_id' => ['string', 'max:255'], 
            'barcode' => ['required', 'string', 'min:7',],
            'product_status'=> ['required', 'string',],
        ]);
    }
    protected function create(array $data)
    {
        
        return Product::create([
            'product_title' => $data['product_title'], 
            'product_category_id' => $data['product_category_id'], 
            'barcode' => $data['barcode'],
            'product_status'=> $data['product_status'],
        ]);
    }

    public function showProductlistForm()
    {
        $products = Product::all();

        return view('product.list',['products'=> $products]);
    }
    public function showProducteditForm()
    {
        return view('product.edit');
    }
    public function showProductaddForm()
    {
        return view('product.add');
    }
    public function showProductdeleteForm()
    {
        return view('product.delete');
    }

}

