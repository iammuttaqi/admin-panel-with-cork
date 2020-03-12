<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index()
    {
        $getCategories = Category::all();
        return view('backend/categories/index', compact('getCategories'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            if (isset($request->menu_status)) {
                Category::insert([
                    'category_name'         => ucfirst($request->category_name),
                    'category_slug'         => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category_name))),
                    'category_description'  => $request->category_description,
                    'menu_status'           => 1,
                    'created_at'            => Carbon::now(),
                    'updated_at'            => Carbon::now(),
                ]);
                return back()->with('alert-success', 'Category created successfully');
            }
            else {
                Category::insert([
                    'category_name'         => ucfirst($request->category_name),
                    'category_slug'         => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category_name))),
                    'category_description'  => $request->category_description,
                    'menu_status'           => 0,
                    'created_at'            => Carbon::now(),
                    'updated_at'            => Carbon::now(),
                ]);
                return back()->with('alert-success', 'Category created successfully');
            }
            
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            if (isset($request->menu_status)) {
                Category::where('id', $id)->update([
                    'category_name'         => ucfirst($request->category_name),
                    'category_slug'         => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category_name))),
                    'category_description'  => $request->category_description,
                    'menu_status'           => 1,
                    'updated_at'            => Carbon::now(),
                ]);
                return back()->with('alert-success', 'Category created successfully');
            }
            else {
                Category::where('id', $id)->update([
                    'category_name'         => ucfirst($request->category_name),
                    'category_slug'         => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category_name))),
                    'category_description'  => $request->category_description,
                    'menu_status'           => 0,
                    'updated_at'            => Carbon::now(),
                ]);
                return back()->with('alert-success', 'Category created successfully');
            }
            
        }
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return back()->with('alert-success', 'Category deleted successfully');
    }

    public function menuStatusChange($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category->menu_status == 1) {
            Category::where('id', $id)->update([
                'menu_status' => 0
            ]);
            return back()->with('alert-danger', $category->category_name." category menu deactivated");
        }
        else {
            Category::where('id', $id)->update([
                'menu_status' => 1
            ]);
            return back()->with('alert-success', $category->category_name." cateogory menu is active now");
        }
    }

    public function categoryStatusChange($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category->status == 1) {
            Category::where('id', $id)->update([
                'status' => 0
            ]);
            return back()->with('alert-danger', $category->category_name." category is deactivated");
        }
        else {
            Category::where('id', $id)->update([
                'status' => 1
            ]);
            return back()->with('alert-success', $category->category_name." category is active now");
        }
    }
}
