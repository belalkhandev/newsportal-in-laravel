<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Home Page',
            'page_header' => 'Home Page',
        ];

        return view('frontend.index')->with(array_merge($this->data, $data));    
    }

    public function post()
    {
        $data = [
            
        ];

        return view('frontend.post')->with(array_merge($this->data, $data));    
    }

    public function category()
    {
        $data = [
            
        ];

        return view('frontend.category')->with(array_merge($this->data, $data));    
    }
}
