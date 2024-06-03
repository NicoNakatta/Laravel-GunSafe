<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'jenis_keamanan' => 'required',
            'harga' => 'required',
        ]);

        Category::create([
            'jenis_keamanan' => $request->jenis_keamanan,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function edit($id_jk)
    {
        $category = Category::find($id_jk);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id_jk)
    {
        $request->validate([
            'jenis_keamanan' => 'required',
            'harga' => 'required',
        ]);

        $category = Category::find($id_jk);

        $category->update([
            'jenis_keamanan' => $request->jenis_keamanan,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function delete($id_jk)
    {
        $category = Category::find($id_jk);
        return view('categories.categories-delete', compact('category'));
    }

    public function destroy($id_jk)
    {
        $category = Category::find($id_jk);
        $category->delete();
        return redirect('/category');
    }

}
