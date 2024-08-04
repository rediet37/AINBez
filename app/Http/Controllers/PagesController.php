<?php

namespace App\Http\Controllers;

use App\Models\Webpage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function openAINHomepage()
    {
        $webpage = Webpage::findOrFail(1);
        $pageData = array (
            'pageTitle' => 'Habar Architects'
        );
        $webpage->color = $webpage->color;
        // $products = Product::where('featured', 1)->latest()->get();
        
        return view('homepage.indexPage', compact('webpage'))->with($pageData);
    }
    public function openAINAboutpage()
    {
        $webpage = Webpage::findOrFail(2);
        $pageData = array (
            'pageTitle' => 'About Habar Architects'
        );
        $webpage->color = $webpage->color;
        
        return view('homepage.about', compact('webpage'))->with($pageData);
    }
    public function openAINContactpage()
    {
        $webpage = Webpage::findOrFail(3);
        $pageData = array (
            'pageTitle' => 'Contact Habar Architects'
        );
        $webpage->color = $webpage->color;
        
        return view('homepage.contact', compact('webpage'))->with($pageData);
    }
    public function openAINProducts()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — Product List'
        );
        
        $products = Product::where('isActive', 1)->latest()->get();
        
        return view('homepage.product_list', compact('products'))->with($pageData);
    }
    public function openAINAllNews()
    {
        $pageData = array (
            'pageTitle' => 'Habar Architects — News'
        );
        
        $newses = News::where('isActive', 1)->latest()->get();
        
        return view('homepage.news_list', compact('newses'))->with($pageData);
    }
    public function openAINNews($id)
    {
        $news = News::findOrFail($id);
        // $images = Image::findOrFail($id);

        // $images_array = json_decode($images->news_pictures);
        
        $pageData = array (
            'pageTitle' => $news->title
        );
        
        // return view('homepage.news', compact('news', 'images_array'))->with($pageData);
        return view('homepage.news', compact('news'))->with($pageData);
    }
    public function openAINProduct($id)
    {
        $product = Product::where('code_name', $id)->first();
        
        $pageData = array (
            'pageTitle' => $product->code_name
        );
        
        return view('homepage.product', compact('product'))->with($pageData);
    }
}
