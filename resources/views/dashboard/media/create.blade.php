@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Upload new file</h5>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.media.store', 'class' => 'dropzone dz-clickable']) !!}
                <div class="dz-default dz-message">
                    <i class="fa fa-upload"></i> <br>
                    <span>Drop files here to upload</span>
                </div>
            {!! Form::close() !!}
            <div id="uploaded_images"></div>
        </div>
        
    </div>
@endsection

@push('header-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dist/dropzone.css') }}">
@endpush

@push('footer-scripts')
    <script src="{{ asset('assets/plugins/dropzone/dist/dropzone.js') }}"></script>
@endpush