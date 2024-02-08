<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index($slug = null)
    {
        if ($slug) {
            $categories = ProductCategories::where('slug', '!=', $slug)->get();
        } else {
            $categories = ProductCategories::all();
        }
        $category = ProductCategories::where('slug', $slug)->first();
        return view('admin.productCategory.index', compact('categories', 'category'));
    }

    public function AddCategory(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // die();
        if ($request->id) {
            $request->validate([
                'name' => 'required|unique:product_categories,name,' . $request->id,
                'slug' => 'required|unique:product_categories,slug,' . $request->id,
            ]);
            if ($request->images !== null) {
                $request->validate(
                    [
                        'images' => 'required',
                        'images.*' => 'required|image|mimes:jpeg,png,jpg,svg',
                    ],
                    [
                        'images.*.image' => 'The file must be an image.',
                        'images.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, svg.',
                    ]
                );
            }
            $category = ProductCategories::find($request->id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->parent_category = $request->parent_category;
            $category->description = $request->description;
            $images = [];
            if ($request->images !== null) {
                foreach ($request->images as $image) {
                    if ($image->isValid()) {
                        $filename = $request->title . rand(0, 100) . '.' . $image->extension();
                        $image->move(public_path() . '/category_Images/', $filename);
                        $images[] = $filename;
                    }
                }
            }
            if ($request->existing_images) {
                $updatedImages = array_merge($request->existing_images, $images);
                $category->images = json_encode($updatedImages);
            } else {
                $category->images = json_encode($images);
            }
            $category->save();

            return redirect()->back()->with('success', 'Successfully Updated category');
        } else {
            $request->validate([
                'name' => 'required|unique:product_categories,name',
                'slug' => 'required|unique:product_categories,slug',
            ]);
            if ($request->images !== null) {
                $request->validate(
                    [
                        'images' => 'required',
                        'images.*' => 'required|image|mimes:jpeg,png,jpg,svg',
                    ],
                    [
                        'images.*.image' => 'The file must be an image.',
                        'images.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, svg.',
                    ]
                );
            }
            $category = new ProductCategories();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->parent_category = $request->parent_category;
            $category->description = $request->description;
            $images = [];
            if ($request->images !== null) {
                foreach ($request->images as $image) {
                    if ($image->isValid()) {
                        $filename = $request->title . rand(0, 100) . '.' . $image->extension();
                        $image->move(public_path() . '/category_Images/', $filename);
                        $images[] = $filename;
                    }
                }
            }
            $category->images = json_encode($images);
            $category->save();

            return redirect()->back()->with('success', 'Successfully Added category');
        }
    }

    public function DeleteCategory(Request $request, $slug)
    {
        if ($slug) {
            $category = ProductCategories::where('slug', $slug)->first();

            if ($category) {
                $childCategories = ProductCategories::where('parent_category', $category->id)->get();
                foreach ($childCategories as $childCategory) {
                    $childCategory->delete();
                }
                $category->delete();
                return redirect()->back()->with('success', 'Category has been removed');
            } else {
                return redirect()->back()->with('error', 'Invalid category for deletion');
            }
        }
        return redirect()->back()->with('error', 'Invalid category for deletion');
    }

    public function CategoryList()
    {
        $parent_categories = ProductCategories::whereNull('parent_category')->get();
        $categories = ProductCategories::whereNotNull('parent_category')->get();

        return view('admin.productCategory.List', compact('categories', 'parent_categories'));
    }


    // product type
    public function ProductType()
    {
        $categories = ProductCategories::all();
        $product_type = ProductType::all();
        return view('admin.product_type.index', compact('categories', 'product_type'));
    }

    public function AddProductType(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:product_types',

        ]);
        $product_type = new ProductType();
        $product_type->name = $request->name;
        $product_type->slug = $request->slug;
        $product_type->category_id = $request->category;
        $product_type->save();

        return redirect()->back()->with('success', 'product Type added successfully');
    }

    public function removeProductType($id)
    {
        $product_type = ProductType::find($id);
        if ($product_type) {
            $product_type->delete();
            return redirect()->back()->with('success', 'product Type deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Invalid product type for deletion');
        }
    }

    public function changeStatus(Request $request)
    {
        $id = $request->input('id');
        if ($id !== null) {
            $category = ProductCategories::find($id);
            if ($category) {
                if ($category->display_on === 1) {
                    $category->update(['display_on' => false]);
                } else {
                    $category->update(['display_on' => true]);
                }
                return response()->json('success');
            } else {
                return response()->json('fail');
            }
        } else {
            return response()->json('fail');
        }
    }
}
