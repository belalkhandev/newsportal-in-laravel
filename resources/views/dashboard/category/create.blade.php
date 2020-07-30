@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Add Category</h5>
                    <div class="card-action">
                        <a href="{{ route('admin.category.list') }}" class="btn btn-primary btn-sm">Category List</a>
                    </div>
                </div>
                {!! Form::open(['route' => 'admin.category.store', 'method' => 'POST']) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. International" id="name">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="about_category">About Category</label>
                        <textarea name="description" id="about_category" rows="5" placeholder="Write about category......" class="form-control"></textarea>
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="slug">Custom Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="e.g. international-news" id="slug">
                        <span class="text-danger"></span>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Save Category</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection