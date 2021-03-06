<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StaticPageDisplayController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function services()
    {
    	return view('pages.services');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

}
