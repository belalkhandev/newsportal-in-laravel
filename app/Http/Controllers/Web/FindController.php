<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\NewsSubtype;
use Illuminate\Http\Request;

class FindController extends Controller
{
    public function getSubCategory(Request $request)
    {
        $sub_category = null;

        $sub_categories = NewsSubtype::where('news_type_id', $request->get('category_id'))->orderBy('name', 'ASC')->get();
        
        if ($sub_categories->isNotEmpty()) {
            $sub_category = '<option value="">Select Sub Category</option>';

            foreach($sub_categories as $key => $category) {
                $sub_category .= '<option value="'.$category->id.'">'.$category->name.'</option>';
            }
        } else {
            $sub_category = '<option value="">No Sub Category Found</option>';
        }
        
        return response()->json([
            'status' => 'success',
            'sub_category' => $sub_category
        ]);
    }
}
