@extends('layout.dashboard.master')
@section('content')
    <form action="{{route('admin.directorates.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">{{__('Meta Data')}}</h5>
      
              <div class="mb-3">
                <label for="directorate_name" class="form-label">{{__('Directorate Name')}} <span
                    class="text-danger">*</span></label>
                <input type="text" id="directorate_name" name="title" class="form-control"
                  placeholder="e.g : Admin & Planning">
              </div>

              <div class="mb-3">
                <label for="directors_name" class="form-label">{{__('Directors Name')}} <span class="text-danger">*</span></label>
                <input type="text" id="directors_name" name="directors_name" class="form-control">
              </div>
      
              <div class="mb-3">
                <label for="product-description" class="form-label">{{__('Directorate Description')}} <span
                    class="text-danger">*</span></label>
                <textarea id="editor" style="height: 150px;" name="body"></textarea> <!-- end Snow-editor-->
              </div>
              <div class="mb-3">
                <label class="mb-2">{{__('Status')}} <span class="text-danger">*</span></label>
                <br />
                <div class="d-flex flex-wrap">
                  <div class="form-check me-2">
                    <input class="form-check-input" type="radio" name="status" value="{{App\Enums\GenericStatus::enabled()}}" id="inlineRadio1" checked>
                    <label class="form-check-label" for="inlineRadio1">{{__('Enabled')}}</label>
                  </div>
                  <div class="form-check me-2">
                    <input class="form-check-input" type="radio" name="status" value="{{App\Enums\GenericStatus::disabled()}}" id="inlineRadio2">
                    <label class="form-check-label" for="inlineRadio2">{{__('Disabled')}}</label>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end card -->
        </div> <!-- end col -->
      
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">{{__('Directorate Image')}}</h5>
              <p class="sub-header">
                Override your input files with style. Your so fresh input file — Default version.
              </p>
      
              <input type="file" data-plugins="dropify" name="directorate_image" data-height="150" />
            </div>
          </div>
      
          <div class="card">
            <div class="card-body">
              <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">{{__('Directors Image')}}</h5>
              <p class="sub-header">
                Override your input files with style. Your so fresh input file — Default version.
              </p>
      
              <input type="file" data-plugins="dropify" name="directors_image" data-height="150" />
            </div>
          </div>
      
        </div> <!-- end col-->
      </div>
      <!-- end row -->
      
      <div class="row">
        <div class="col-12">
          <div class="text-center mb-3">
            <button type="submit" class="btn w-sm btn-success waves-effect waves-light">{{__('Create')}}</button>
            <a href="{{route('admin.directorates.index')}}"
              class="btn w-sm btn-danger waves-effect waves-light">{{('Cancel')}}</a>
          </div>
        </div> <!-- end col -->
      </div>
      <!-- end row -->
    </form>
  
  
    <!-- file preview template -->
    <div class="d-none" id="uploadPreviewTemplate">
      <div class="card mt-1 mb-0 shadow-none border">
        <div class="p-2">
          <div class="row align-items-center">
            <div class="col-auto">
              <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
            </div>
            <div class="col ps-0">
              <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
              <p class="mb-0" data-dz-size></p>
            </div>
            <div class="col-auto">
              <!-- Button -->
              <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                <i class="dripicons-cross"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection