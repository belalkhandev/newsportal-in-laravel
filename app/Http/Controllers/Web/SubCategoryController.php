<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\SubCategoryStoreRequest;
use App\Http\Requests\Category\SubCategoryUpdateRequest;
use App\Models\NewsSubtype;
use App\Models\NewsType;
use App\Services\Utility;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Sub Category List',
            'page_header' => 'Sub Category List',
            'categories' => NewsSubtype::orderBy('name', 'ASC')->get(),
        ];

        return view('dashboard.sub-category.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Add new sub category',
            'page_header' => 'Add new sub category',
            'categories' => NewsType::orderBy('name', 'ASC')->get()
        ];

        return view('dashboard.sub-category.create')->with(array_merge($this->data, $data));
    }

    public function store(SubCategoryStoreRequest $request)
    {
        // upload photo
        $path = null;
        if($request->hasFile('category_photo')) {
            $path = Utility::file_upload($request, 'category_photo', 'sub-categories');
        }
        // store category
        $category = new NewsSubtype();
        $category->name = $request->get('name');
        $category->news_type_id = $request->get('category');
        $category->description = $request->get('description');
        $category->photo = $path;
        $category->status = $request->get('status');

        if ($category->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Sub Category added successfully',
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed',
            'message' => 'Sub Category failed to add',
        ]);
    }

    public function edit($id)
    {
        $category = NewsSubtype::find($id);

        if (!$category) {
            abort(404, 'Not found');
        }

        $data = [
            'page_title' => 'Update sub category',
            'page_header' => 'Update sub category',
            'category' => $category,
            'categories' => NewsType::orderBy('name', 'ASC')->get(),
        ];

        return view('dashboard.sub-category.edit')->with(array_merge($this->data, $data));
    }

    public function update(SubCategoryUpdateRequest $request, NewsSubtype $news_sub_type, $id)
    {
        $category = $news_sub_type->find($id);
        // update & upload photo
        if($request->hasFile('category_photo')) {
            if ($category->photo) {
                unlink($category->photo);
            }
            
            $category->photo = Utility::file_upload($request, 'category_photo', 'sub-categories');
        }
        // store category
        $category->name = $request->get('name');
        $category->news_type_id = $request->get('category');
        $category->description = $request->get('description');
        $category->status = $request->get('status');

        if ($category->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Update',
                'message' => 'Sub Category updated successfully',
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed',
            'message' => 'Sub Category failed to update',
        ]);
    }

    public function destroy(NewsSubtype $news_sub_type, $id)
    {
        $category = $news_sub_type->find($id);

        if ($category->photo) {
            unlink($category->photo);
        }

        if ($category->delete()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Success!',
                'message' => 'Sub Category Deleted Successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed!',
            'message' => 'Failed to Delete Sub Category'
        ]);
    }

}
