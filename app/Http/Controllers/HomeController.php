<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'links' => Auth::user()->links()
                ->withCount('visits')
                ->get()
        ]);
    }
}
