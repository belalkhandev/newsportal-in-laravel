<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Default data
     */
    protected $data = [];

    /**
     * Default Data
     * @author Belal Khan
     */
    public function __construct()
    {
        // Default variables
        $this->data = [
            'page_title' => 'Laravel times | Newsportal website',
            'page_header' => 'Dashboard',
            'page_desc' => 'Newsportal website home page',
        ];
    }
}
