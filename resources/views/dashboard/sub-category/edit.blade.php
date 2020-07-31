@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $page_title }}</h5>
                    <div class="card-action">
                        <a href="{{ route('admin.sub-category.list') }}" class="btn btn-primary btn-sm">Sub Category List</a>
                    </div>
                </div>
                {!! Form::open(['route' => ['admin.sub-category.update', $category->id], 'method' => 'POST']) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" placeholder="e.g. International" id="name">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Category of</label>
                        {!! Form::select('category', makeDropdownList($categories), $category->news_type_id, ['placeholder' => 'Select Category', 'class' => 'form-control']) !!}
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="about_category">About Category</label>
                        <textarea name="description" id="about_category" rows="4" placeholder="Write about category......" class="form-control">{!! $category->description !!}</textarea>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        {!! Form::select('status', getStatus(), $category->status, ['class' => 'form-control']) !!}
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Category Photo</label> <br>
                        <input type="file" name="category_photo"><br>
                        <span class="text-danger"></span>
                    </div>
                    @if($category->photo)
                        <br>
                        <img src="{{ asset($category->photo) }}" alt="" class="table-img-thumbs">
                    @endif
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit" onclick="submit_form(this, event)">Update Sub-Category</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection