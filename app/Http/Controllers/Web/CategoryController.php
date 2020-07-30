<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CateogryStoreRequest;
use App\Http\Requests\Category\CateogryUpdateRequest;
use App\Models\NewsType;
use App\Services\Utility;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Category list',
            'page_header' => 'Category list',
            'categories' => NewsType::orderBy('name', 'ASC')->get(),
        ];

        return view('dashboard.category.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Add new category',
            'page_header' => 'Add new category',
        ];

        return view('dashboard.category.create')->with(array_merge($this->data, $data));
    }

    public function store(CateogryStoreRequest $request)
    {
        // upload photo
        $path = null;
        if($request->hasFile('category_photo')) {
            $path = Utility::file_upload($request, 'category_photo', 'categories');
        }
        // store category
        $category = new NewsType();
        $category->name = $request->get('name');
        $category->description = $request->get('description');
        $category->photo = $path;

        if ($category->save()) {
            dd('saved');
        }
    }

    public function edit($id)
    {

    }

    public function update(CateogryUpdateRequest $request, NewsType $news_type, $id)
    {

    }

    public function delete(NewsType $news_type, $id)
    {

    }


}
