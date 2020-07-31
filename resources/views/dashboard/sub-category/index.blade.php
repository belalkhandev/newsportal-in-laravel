@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ $page_title }}</h5>
            <div class="card-action">
                <a href="{{ route('admin.sub-category.create') }}" class="btn btn-primary">Add New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Thumbs</th>
                        <th>Description</th>
                        <th style="min-width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($categories->isNotEmpty())
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->newsType->name }}</td>
                                <td>
                                    @if($category->photo)
                                        <img src="{{ asset($category->photo) }}" alt="" class="table-img-thumbs">
                                        @else
                                        <img src="https://via.placeholder.com/60" alt="" class="table-img-thumbs">
                                    @endif
                                </td>
                                <td>{{ $category->description }}</td>
                                
                                <td class="action-btn-inline">
                                    {{-- edit action --}}
                                    <a href="{{ route('admin.sub-category.edit', $category->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit" data-original-title="Edit" class="btn btn-round btn-primary-rgba custom-btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    {{-- delete action --}}
                                    {!! Form::open(['route' => ['admin.sub-category.delete', $category->id], 'method' => 'DELETE', 'class'=>'inline-el']) !!}
                                        <button type="submit" class="btn btn-round btn-danger-rgba custom-btn-sm" onclick="deleteSwal(this, event)"  data-toggle="tooltip" data-placement="left" title="Delete" data-original-title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No Category Found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection