<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Blog;
use App\Models\Kontainer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      
        $blog = Blog::count();

        return view('home.index', compact('blog'));
    }
}
