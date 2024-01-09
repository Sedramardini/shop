<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Http\Requests\updateCategoryRequest;
use App\Models\Category;
use App\Models\product;



class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['route'] = 'categories';
        $data['categories'] = Category::select('id', 'name', 'image', 'is_showing', 'is_popular')->get();
       
        return view('admin.category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['route'] = 'categories';

        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeCategoryRequest $request)
    {

        try {
            $validate = $request->validated();

            $category = new Category();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->is_showing = $request->is_showing ? '1' : '0';
            $category->is_popular = $request->is_popular ? '1' : '0';
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keywords = $request->meta_keywords;
          
            
            if (!empty ($request->file('image'))) {
                if(\File::exists(public_path('categoryImage/').$category->image)){
                    \File::delete(public_path('categoryImage/').$category->image);
                }
                $imageName = uniqid() . $request->file('image')->getClientOriginalName();
    
                $request->file('image')->move(public_path('categoryImage'), $imageName);
                $category->image= $imageName;
            }
            $category->save();
            return redirect()->route('categories.index')->with('success','تمت الاضافة بنجاح');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;
        return view('admin.category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data['route'] = 'categories';
        $data['category'] = $category;
        return view('admin.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateCategoryRequest $request, Category $category)
    {

        try {

            $validated = $request->validated();
dd($request->input());
            $image = $category->image;
            if (!empty ($request->file('image'))) {
                if(\File::exists(public_path('categoryImage/').$category->image)){
                    \File::delete(public_path('categoryImage/').$category->image);
                }
                $imageName = uniqid() . $request->file('image')->getClientOriginalName();
    
                $request->file('image')->move(public_path('categoryImage'), $imageName);
                $category->image= $imageName;
            }

            $category->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'description' =>  $request->description,
                'is_showing' => $request->is_showing ? '1' : '0',
                'is_popular' => $request->is_popular ? '1' : '0',
                'meta_title' => $request->meta_title,
                'meta_description'  => $request->meta_description ,
                'meta_keywords' => $request->meta_keywords
                

            ]);
         
            return redirect()->route('categories.index')->with('success','تم التعديل بنجاح');

           } catch (\Exception $e) {
            return redirect()->withErrors('error', $e->getMessage());

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
   
        $category->delete();
        return redirect()->route('categories.index')->with('success','تم الحذف');
    }
}
