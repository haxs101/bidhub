@extends('layouts.app')
@section('title', 'Page Title')
@section('content')

<div class="page-wrapper" style="min-height: 149px;">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">{{ isset($title) ? $title : 'File' }}</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('files.file.create') }}" class="btn btn-info m-l-15" title="{{ trans('files.create') }}">
                        <i class="fa fa-plus-circle"></i>Create New
                    </a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                   <div class="card-body">
                        <p>
   <h6>{{ trans('files.file_name') }}</h6>
   <small class="text-muted"> {{ $file->file_name }}</small>
</p>
<p>
   <h6>{{ trans('files.file_path') }}</h6>
   <small class="text-muted"> {{ $file->file_path }}</small>
</p>
<p>
   <h6>{{ trans('files.file_type') }}</h6>
   <small class="text-muted"> {{ $file->file_type }}</small>
</p>
<p>
   <h6>{{ trans('files.project_id') }}</h6>
   <small class="text-muted"> {{ $file->project_id }}</small>
</p>
<p>
   <h6>{{ trans('files.created_by') }}</h6>
   <small class="text-muted"> {{ optional($file->creator)->name }}</small>
</p>
<p>
   <h6>{{ trans('files.created_at') }}</h6>
   <small class="text-muted"> {{ $file->created_at }}</small>
</p>
<p>
   <h6>{{ trans('files.updated_at') }}</h6>
   <small class="text-muted"> {{ $file->updated_at }}</small>
</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                   <div class="card-body">
                      <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection