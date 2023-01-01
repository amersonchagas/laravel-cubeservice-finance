<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{


    public function home()
    {
        return view('site.pages.home');
    }

    public function about()
    {
        return view('site.pages.about');
    }


    public function services()
    {
        return view('site.pages.services');
    }

    public function products()
    {
        return view('site.pages.products');
    }

    public function contact()
    {
        return view('site.pages.contact');
    }

}
