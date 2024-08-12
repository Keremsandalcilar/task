<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Echo_;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.list',['categories'=> $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        Category::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'status' => $request['status'],
        ]);
        return redirect()->route('categorylist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kategori kayıt edildi.']);
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
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('categorylist')->with('swallMessages', ['icon' => 'error', 'title' => 'Uyarı', 'text' => 'Kategori bulunamadı']);
            //return abort(404);
        }
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validator($request->all())->validate();

        $category = Category::find($id);
        if (!$category) {
            return abort(404);
        }
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->status = $request->input('status');
        $category->update();

        return redirect()->route('categoryedit', [$category->id])->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kategori güncellendi']);
    }

    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'status' => ['required', 'string'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->product()->update(['category_id' => null ]);
        $category->delete();
        return redirect()->route('categorylist')->with('swallMessages', ['icon' => 'success', 'title' => 'Başarılı', 'text' => 'Kategori silindi.']);
    }
    
}
