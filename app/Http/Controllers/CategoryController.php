<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**list all categories */
    public function index()
    {
        return Category::all();
    }

    /**create new category */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|unique:categories,name',
        ]);
        $category = Category::create([
            'name' => $fields['name']
        ]);

        return [
            'message' => 'category added',
            'category' => $category
        ];
    }

    /** update category */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required|string',
        ]);
        $category = Category::find($id);
        $category->name = $fields['name'];
        $category->update();

        return [
            'message' => 'category updated',
            'category' => $category
        ];
    }

    /** search category by id */
    public function show($id)
    {
        return Category::find($id);
    }

    /** delete category */
    public function destroy($id)
    {
        $category = Category::find($id);
        $response = $category->delete();
        if ($response == 1) {
            return [
                'message' => 'category deleted',
            ];
        } else {
            return [
                'message' => 'not deleted',
            ];
        }
    }
}
