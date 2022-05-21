<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        //dd(request('search'));
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard', [
            'links' => Auth::user()->links()
                ->withCount('visits')
                ->with('latest_visit')
                ->get()
        ]);
    }
}
