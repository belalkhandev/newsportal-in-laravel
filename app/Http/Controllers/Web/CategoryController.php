<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CateogryStoreRequest;
use App\Http\Requests\Category\CateogryUpdateRequest;
use App\Models\News;
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
            return response()->json([
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Category added successfully',
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed',
            'message' => 'Category failed to add',
        ]);
    }

    public function edit($id)
    {
        $category = NewsType::find($id);

        if (!$category) {
            abort(404, 'Not found');
        }

        $data = [
            'page_title' => 'Update category',
            'page_header' => 'Update category',
            'category' => $category,
        ];

        return view('dashboard.category.edit')->with(array_merge($this->data, $data));
    }

    public function update(CateogryUpdateRequest $request, NewsType $news_type, $id)
    {
        $category = $news_type->find($id);
        // update & upload photo
        if($request->hasFile('category_photo')) {
            if ($category->photo) {
                unlink($category->photo);
            }
            
            $category->photo = Utility::file_upload($request, 'category_photo', 'categories');
        }
        // store category
        $category->name = $request->get('name');
        $category->description = $request->get('description');

        if ($category->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Update',
                'message' => 'Category updated successfully',
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed',
            'message' => 'Category failed to update',
        ]);
    }

    public function destroy(NewsType $news_type, $id)
    {
        $category = $news_type->find($id);

        if ($category->photo) {
            unlink($category->photo);
        }

        if ($category->delete()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Category Deleted Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Delete Category'
        ]);
    }


}
