<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Dashboard | Home Page',
            'page_header' => 'Dashboard | Home Page',
            'page_desc' => 'Home page of the dashboard',
        ];

        return view('dashboard.index')->with(array_merge($this->data, $data));
    }
}
