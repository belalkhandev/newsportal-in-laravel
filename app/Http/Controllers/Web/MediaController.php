<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\NewsSubtype;
use App\Models\NewsType;
use App\Services\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Media Library',
            'page_header' => 'Media Library',
            'files' => Media::orderBy('id', 'DESC')->paginate(10),
            'categories' => NewsType::where('status', 1)->orderBy('name', 'ASC')->get(),
        ];

        return view('dashboard.media.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Add new media',
        'page_header' => 'Add new media',
        ];

        return view('dashboard.media.create')->with(array_merge($this->data, $data));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'media_file' => 'mimes:jpg,png,jpeg|max:5120'
        ],[
            'media_file.max' => 'File size should not be avobe of 5MB'
        ]);

        //upload media file
        if ($request->hasFile('media_file')) {
            $path = Utility::media_file_upload($request, 'media_file', 'media-files');
            $media = new Media();
            $media->user_id = Auth::user()->id;
            $media->file = $path;

            if ($media->save()) {
                return response()->json([
                    'type' => 'success',
                    'title' => 'Uploaded file',
                    'message' => 'File uploaded successfully'
                ]);
            }
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed',
            'message' => 'File failed to upload'
        ]);
    }

    public function edit(Request $request)
    {
        $media = Media::find($request->get('media_id'));
        $sub_category = null;

        if ($media->news_type_id) {
            $sub_categories = NewsSubtype::where('news_type_id', $media->news_type_id)->orderBy('name', 'ASC')->get();
            $sub_category = '<option value="">Select Sub-Category</option>';

            foreach($sub_categories as $key => $category) {
                $sub_category .= '<option value="'.$category->id.'">'.$category->name.'</option>';
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => $media,
            'sub_categories' => $sub_category,
        ]);
    }

    public function update(Request $request)
    {
        $media = Media::find($request->get('media_id'));
        $media->caption = $request->get('caption');
        $media->description = $request->get('description');
        $media->news_type_id = $request->get('category');
        $media->news_subtype_id = $request->get('sub_category');

        if ($media->save()) {
            return response()->json([
                'type' => 'success',
                'title' => 'Updated',
                'message' => 'File Updated successfully'
            ]);
        }

        return response()->json([
            'type' => 'error',
            'title' => 'Failed Update',
            'message' => 'File failed to update'
        ]);
    }
}
