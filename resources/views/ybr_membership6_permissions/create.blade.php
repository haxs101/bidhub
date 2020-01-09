@extends('layouts.app')

@section('content')
<div class="page-wrapper" style="min-height: 149px;">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h4 class="text-themecolor">{{ trans('ybr_membership6_permissions.create') }}</h4>
			</div>
			<div class="col-md-7 align-self-center text-right">
				<div class="d-flex justify-content-end align-items-center">
				  <a href="{{ route('ybr_membership6_permissions.ybr_membership6_permission.index') }}" class="btn btn-info m-l-15 float-right" title="{{ trans('ybr_membership6_permissions.show_all') }}">
                                          <i class="fa fa-plus-circle"></i> {{ trans('ybr_membership6_permissions.show_all') }}
                                 </a>
                                 	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">

				<div class="card">
                        <div class="card-body">


			 @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ route('ybr_membership6_permissions.ybr_membership6_permission.store') }}" accept-charset="UTF-8" id="create_ybr_membership6_permission_form" name="create_ybr_membership6_permission_form" class="form-horizontal">
                        {{ csrf_field() }}
                        @include ('ybr_membership6_permissions.form', [
                                                    'ybrMembership6Permission' => null,
                                                  ])

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input class="btn btn-info d-none d-lg-block m-l-15" type="submit" value="{{ trans('ybr_membership6_permissions.add') }}">
                                </div>
                            </div>

                        </form>


</div>
		</div>

			</div>
		</div>
	</div>
</div>

@endsection


