@extends('layouts.app')

@section('content')
	<div class="page-wrapper" style="min-height: 149px;">
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h4 class="text-themecolor">Directory</h4>
				</div>
				<div class="col-md-7 align-self-center text-right">
					<div class="d-flex justify-content-end align-items-center">
						<a href="{{ route('directory.directories.index') }}" class="btn btn-info m-l-15" title="{{ trans('directory.directories.index') }}">
							Directory message
						</a>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <p style="text-align: center;font-size: 17px;margin-top: 30px;">Your listing request has been submitted, please allow 24 hours for a BidHub staff member to review your request.</p>
                    </div>
                </div>
			</div>
        </div>
    </div>
				
@endsection


