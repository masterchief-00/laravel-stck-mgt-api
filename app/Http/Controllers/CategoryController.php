<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:ADM|WHS|USR']);
    }
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

        if ($request->user()->can('category:register')) {
            $category = Category::create([
                'name' => $fields['name']
            ]);

            return [
                'message' => 'category added',
                'category' => $category
            ];
        } else {
            return ['message' => 'unauthorised for this action'];
        }
    }

    /** update category */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required|string',
        ]);

        if ($request->user()->can('category:update')) {
            $category = Category::find($id);
            $category->name = $fields['name'];
            $category->update();

            return [
                'message' => 'category updated',
                'category' => $category
            ];
        } else {
            return ['message' => 'unathorised for this action'];
        }
    }

    /** search category by id */
    public function show($id)
    {
        return Category::find($id);
    }

    /** delete category */
    public function destroy($id)
    {
        $user = User::find(auth()->user()->id);

        if ($user->can('category:delete')) {
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
        } else {
            return ['message' => 'unaithorised for this action'];
        }
    }
}
