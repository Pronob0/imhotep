@extends('layouts.admin')
@section('title')
    @lang('Add New Project')
@endsection

@section('breadcrumb')
    <section class="section">
        <div class="section-header  d-flex justify-content-between">
            <h1>@lang('Add New Project')</h1>
            <a href="{{ route('admin.project.index') }}" class="btn btn-primary"><i class="fas fa-backward"></i>
                @lang('Back')</a>
        </div>
    </section>
@endsection
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Form Basic -->
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('Add New Project Form') }}</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.project.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="form-group d-flex justify-content-center">
                            <div id="image-preview" class="image-preview image-preview_alt"
                                style="background-image:url({{ getPhoto('') }});">
                                <label for="image-upload" id="image-label">@lang('Choose File')</label>
                                <input type="file" name="photo" id="image-upload" />
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title">{{ __('Title') }}*</label>
                            <input type="text" class="form-control" name="title" id="title" required
                                placeholder="{{ __('Title') }}" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="title">{{ __('Location') }}*</label>
                            <input type="text" class="form-control" name="location" id="title" required
                                placeholder="{{ __('Location') }}" value="{{ old('location') }}">
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Description') }}</label>
                            <textarea id="area1" class="form-control summernote" name="description" placeholder="{{ __('Description') }}" >{{old('description')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Scope Of Work') }}</label>
                            <textarea id="area1" class="form-control summernote" name="scope_work" placeholder="{{ __('Scope Of Work') }}" >{{old('Scope of work')}}</textarea>
                        </div>
                        {{-- gallery input   --}}
                        <div class="form-group">
                            <label for="description">{{ __('Gallery') }}</label>
                            <input type="file" class="form-control" name="gallery[]" id="gallery" multiple>
                        </div>




                        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
            <!-- Form Sizing -->
            <!-- Horizontal Form -->
        </div>
    </div>
    <!--Row-->
@endsection
@push('script')
    <script>
        'use strict';
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "{{ __('Choose File') }}", // Default: Choose File
            label_selected: "{{ __('Update Image') }}", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
   
    </script>
@endpush