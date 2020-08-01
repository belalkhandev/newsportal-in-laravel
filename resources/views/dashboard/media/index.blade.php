@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $page_title }}</h5>
            <div class="card-action">
                <a href="{{ route('admin.media.create') }}" class="btn btn-primary">Upload new library</a>
            </div>
        </div>
        <div class="card-body">
            <div class="media-library">
                <div class="media-head">
                    <div class="media-head-file media-title">
                        <h3 class="media-head-title">File</h3>
                    </div>
                    <div class="media-head-caption media-title">
                        <h3 class="media-head-title">Caption</h3>
                    </div>
                    <div class="media-head-info media-title">
                        <h3 class="media-head-title">About File</h3>
                    </div>
                    <div class="media-head-action media-title">
                        <h3 class="media-head-title"></h3>
                    </div>
                </div>
                <div class="media-content">
                    @foreach ($files as $file)
                        <div class="media-row">
                            <div class="media-row-body media-file">
                                <img src="{{ asset($file->file) }}" alt="" class="rounded">
                            </div>
                            <div class="media-row-body media-caption">
                                <p>{{ $file->caption }}</p>
                            </div>
                            <div class="media-row-body media-info">
                                <p>
                                    <strong>Category:</strong>
                                    @if($file->newsType)
                                        {{ $file->newsType->name }}
                                    @endif
                                    @if($file->newsSubtype)
                                        {{ ', '.$file->newsSubtype->name }}
                                    @endif
                                </p>
                                <p><strong>Uploaded at: </strong>{{ user_formatted_date($file->created_at) }}</p>
                                <p><strong>Uploaded By: </strong>{{ $file->user->name }}</p>
                            </div>
                            <div class="media-row-body media-action text-right">
                                {{-- edit action --}}
                                <button type="button" 
                                    data-toggle="modal" 
                                    data-target=".media-file-edit-modal" 
                                    title="Edit"
                                    data-media_id="{{ $file->id }}"
                                    class="btn btn-round btn-primary-rgba custom-btn-sm edit-media">
                                    <i class="fa fa-edit"></i>
                                </button>                                {{-- delete action --}}
                                {!! Form::open(['route' => ['admin.media.delete', $file->id], 'method' => 'DELETE', 'class'=>'inline-el']) !!}
                                    <button type="submit" class="btn btn-round btn-danger-rgba custom-btn-sm" onclick="deleteMediaFileSwal(this, event)"  data-toggle="tooltip" data-placement="left" title="Delete" data-original-title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="card-footer">
            {{ $files->links() }}
        </div>
    </div>
    {{-- media editable modal --}}
    <div class="modal fade media-file-edit-modal" tabindex="-1" role="dialog" aria-labelledby="mediaFileEidtModal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-xl modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediaFileEidtModal">Edit Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              {!! Form::open(['route' => 'admin.media.update']) !!}
              <div class="modal-body">
                <div class="media-edit-box" id="mediaEditBox">
                    <div class="media-edit-file">
                        <img src="#" alt="" id="mediaFileSrc">
                        <input type="hidden" name="media_id" id="mediaId">
                    </div>
                    <div class="media-edit-content">
                        <div class="form-group">
                            <label for="">Caption</label>
                            <input type="text" name="caption" class="form-control" placeholder="Caption" id="caption">
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Category</label>
                            {!! Form::select('category', makeDropdownList($categories), null, ['placeholder' => 'Select Category', 'class' => 'form-control', 'id' => 'category']) !!}
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Sub Category</label>
                            {!! Form::select('sub_category', [], null, ['placeholder' => 'Select Sub Category', 'class' => 'form-control', 'id' => 'subCategory']) !!}
                            <span class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" rows="3" id="description"></textarea>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="submit_form(this, event)">Update File</button>
              </div>
              {!! Form::close() !!}
          </div>
        </div>
      </div>
@endsection

@push('footer-scripts')
<script>
    (function ($) {
        "use-strict"

        jQuery(document).ready(function () {

            const BASE_URL = 'http://127.0.0.1:8000';
            const DEFAULT_IMAGE = 'https://via.placeholder.com/640x370';

            $(document).on('click', '.edit-media', function () {
                let media_id = $(this).data('media_id');
                let $media_file = $('#mediaFileSrc');
                let $media_caption = $('#caption');
                let $media_desc = $('#description');
                let $media_category = $('#category');
                let $media_sub_category = $('#subCategory');
                let $mediaId = $('#mediaId');

                $.ajax("{{ route('admin.media.edit') }}", {
                    type: 'POST',
                    beforeSend: function (xhr) {
                        $media_file.attr('src', DEFAULT_IMAGE)
                        $media_caption.val('');
                        $media_desc.val('');
                        $media_category.val('');
                        $media_sub_category.html('<option value="">Select Sub Category</option>');
                        $media_sub_category.val('');
                        $mediaId.val('');
                    },
                    data: {
                        _token: "{{ csrf_token() }}",
                        media_id: media_id
                    },
                    success: function (res, status, xhr) {
                        if (status == 'success') {
                            let data = res.data;

                            if (res.sub_categories) {
                                $media_sub_category.html(res.sub_categories);
                            }

                            $media_file.attr('src', BASE_URL+'/'+data.file);
                            $mediaId.val(data.id);
                            $media_caption.val(data.caption);
                            $media_desc.val(data.description);
                            $media_category.val(data.news_type_id);
                            $media_sub_category.val(data.news_subtype_id);
                        }
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        console.log(errorMessage);
                    }
                });
            });

            $(document).on('change', '#category', function () {
                let category_id = $(this).val();
                let $media_sub_category = $('#subCategory');

                $.ajax("{{ route('admin.find.sub-category') }}", {
                    type: 'POST',
                    beforeSend: function (xhr) {
                        $media_sub_category.html('<option value="">Loading.....</option>');
                    },
                    data: {
                        _token: "{{ csrf_token() }}",
                        category_id: category_id
                    },

                    success: function (res, status, xhr) {
                        if (status == 'success') {
                            let data = res.sub_category;

                            if (data) {
                                $media_sub_category.html(data);
                            }
                        }
                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        console.log(errorMessage);
                    }
                });
            });

        });

    }(jQuery));
</script>
@endpush