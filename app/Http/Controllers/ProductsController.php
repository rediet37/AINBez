<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Traits\StoreImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\Response;

class ProductsController extends Controller
{
    use StoreImageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $products = Product::latest()->get();
        $pageData = array (
            'pageTitle' => 'AIN Products'
        );

        return view('backend.products.indexPage', compact('products', 'pageData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $pageData = array (
            'pageTitle' => 'Habar create a product'
        );

        return view('backend.products.createPage')->with($pageData);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validated();
        $product = new Product();
        
        $product->title = $request->input('title');
        $product->code_name = $request->input('code_name');
        $product->description = $request->input('description');
        $product->location = $request->input('location');
        $product->status = $request->input('status');
        $product->year = $request->input('year');
        $product->price = $request->input('price');
        $product->discount = $request->input('discount');
        $product->category = $request->input('category');
        $product->featured = $request->input('featured');
        $product->postedBy = $request->input('postedBy');

        $product->save();

        $this->verifyAndStoreImage($request, 'product_pictures', $product->id);

        return redirect()->route('post_products.index')->with('create_success', 'New product successfully created! Click on "view" to explore every detail of the product.');
    }

    /**
     * Display the specified resource.
     */
    public function show($product_id)
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product = Product::FindOrFail($product_id);
        $pageData = array (
            'pageTitle' => 'Habar Products'
        );

        return view('backend.products.viewPage', compact('product', 'pageData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product = Product::FindOrFail($product_id);
        return view('backend.products.editPage', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product_id)
    {
        abort_if(Gate::denies('products_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $product = Product::FindOrFail($product_id);
        $product->update($request->validated());

        return redirect()->route('post_products.index')->with('update_success', 'Product #'. $product->id .' updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        File::deleteDirectory(public_path('/images/products/product'.$product->id));

        $product->delete();

        return redirect()->route('post_products.index')->with('delete_success', 'Product successfully deleted!');
    }
}
