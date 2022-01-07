<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.product.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->slug = Str::slug($request->category_name, '-');
        $category->remarks = $request->remarks;
        $category->save();

        $message = "Product Category Successfully Created";
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        return view('admin.product.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        return view('admin.product.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        $category = Category::where('status', 1)->where('id', $id)->first();
        // dd($request->all());
        // dd($category)
        $category->category_name = $request->category_name;
        $category->remarks = $request->remarks;
        $category->update();

        $message = 'Category Update Successfully!';
        return redirect()->route('admin.categories')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        $category->delete();

        $message = 'Category Delete Successfully!';
        return redirect()->back()->with('message', $message);
    }

    public function softdelete($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        $category->status = 0;
        $category->update();

        $message = 'Category Move To Trush Successfully!';
        return redirect()->back()->with('message', $message);
    }

    public function restore($slug)
    {
        $category = Category::where('status', 1)->where('slug', $slug)->first();
        $category->status = 1;
        $category->update();

        $message = 'Category Restore Successfully!';
        return redirect()->back()->with('message', $message);
    }
}
