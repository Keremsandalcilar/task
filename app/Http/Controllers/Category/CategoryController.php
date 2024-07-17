<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category; 
use Illuminate\Support\Facades\Hash; 

class CategoryController extends Controller
  
{
    public function showCategoryForm()
    {
        return view('category.category');
    }
    public function add(Request $request)
    {
        $this->validator($request->all())->validate();
        $category = $this->create($request->all());
        return redirect()->route('categorylist');
    }
    
    public function edit(Request $request)
    {
        $this->validator($request->all())->validate();
        $category = $this->create($request->all());
        return redirect()->route('categoryedit');
    }

        protected function validator(array $data)
    {
        return Validator::make($data, [
            'category_id'=> ['required','string'],
            'category_title' => ['required', 'string', 'max:255'], 
            'category_description' => ['required', 'string','max:255'], 
            'category_status' => ['required', 'string'],
        ]);
    }
    protected function create(array $data)
    {
        
        return Category::create([
            'category_id'=> $data['category_id'],
            'category_title' => $data['category_title'], 
            'category_description' => $data['category_description'], 
            'category_status' => $data['category_status'],
        ]);
    }

    public function showCategorylistForm()
    {
        $categories = Category::all();  
        return view('category.list',['categories'=> $categories]);
    }
    public function showCategoryeditForm()
    {
        return view('category.edit');
    }
    public function showCategoryaddForm()
    {
        return view('category.add');
    }
    public function showCategorydeleteForm()
    {
        return view('category.delete');
    }
}

