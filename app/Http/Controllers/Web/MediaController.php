<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Media;
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
            'page_bc' => true,
            'files' => Media::get(),
        ];

        return view('dashboard.media.index')->with(array_merge($this->data, $data));
    }

    public function create()
    {
        $data = [
            'page_title' => 'Add new media',
            'page_header' => 'Add new media',
            'page_bc' => true,
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
}
