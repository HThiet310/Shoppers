<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->latest('id')->paginate(12);

        return view('client.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->get();

        return view('client.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $data = $request->all();

            if ($request->hasFile('image')) {
                $file = $request->file('image');

                // Lấy tên file gốc
                $filename = time() . '_' . $file->getClientOriginalName();

                // Tạo đường dẫn lưu file
                $destinationPath = public_path('uploads/products');

                // Di chuyển file vào thư mục public/uploads/products
                $file->move($destinationPath, $filename);

                // Trả về đường dẫn để sử dụng hoặc lưu vào database
                $path = 'uploads/products/' . $filename;

                $data['image'] = $path;
            }

            Product::query()->create($data);

            return back()->with('success', 'Thêm danh mục thành công');
        } catch (\Throwable $th) {
            return back()->with('error', 'Thêm Danh mục thất bại');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('client.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
