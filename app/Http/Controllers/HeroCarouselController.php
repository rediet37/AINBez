<?php

namespace App\Http\Controllers;

use App\Models\HeroCarousel;
use Illuminate\Http\Request;

class HeroCarouselController extends Controller
{
    public function index()
    {
        $heroCarouselItems = HeroCarousel::all();
        return view('homepage.indexPage', compact('heroCarouselItems'));
    }
}
