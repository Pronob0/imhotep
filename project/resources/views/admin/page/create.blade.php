@extends('layouts.admin')
@section('title')
   @lang('Create Service')
@endsection

@section('breadcrumb')
 <section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>@lang('Create Service')</h1>
        <a href="{{route('admin.page.index')}}" class="btn btn-primary"><i class="fas fa-backward"></i> @lang('Back') </a>
    </div>
</section>
@endsection
@section('content')

<div class="row justify-content-center">
   <div class="col-md-12">
      <!-- Form Basic -->
      <div class="card mb-4">
         <div class="card-body">
           
            <form action="{{route('admin.page.store')}}" method="POST" enctype="multipart/form-data">
              
               @csrf
               <div class="col-md-12 ShowImage mb-3  text-center">
                  <img src="{{ getPhoto('') }}" class="img-fluid" alt="image" width="400">
               </div>
            
               <div class="form-group">
                  <label for="inp-name">{{ __('Title') }}</label>
                  <input type="text" class="form-control" id="inp-name" name="title"  placeholder="{{ __('Enter Title') }}" value="" required>
               </div>
               <div class="form-group">
                  <label for="description">{{ __('Description') }}</label>
                  <textarea id="area1" class="form-control summernote" name="details" placeholder="{{ __('Description') }}"></textarea>
              </div>

              <div class="col-md-12">
               <div class="form-group">
                   <label for="image">{{ __(' Photo') }}</label>
                   <span class="ml-3">{{ __('(Extension:jpeg,jpg,png)') }}</span>
                   <div class="custom-file">
                       <input type="file" class="custom-file-input" name="photo" id="image" accept="image/*" required>
                       <label class="custom-file-label" for="photo">{{ __('Choose file') }}</label>
                   </div>
               </div>
           </div>
         
               <button type="submit"  class="btn btn-primary">{{ __('Submit') }}</button>
            </form>
         </div>
      </div>
      <!-- Form Sizing -->
      <!-- Horizontal Form -->
   </div>
</div>
<!--Row-->
@endsection