@extends('themes.ino.app_ino')
@section('content')
    <section class="usability-area box-shadow features" style="margin-top:100px;">
    	<div class="container">
    		<div class="section-title">
    			<h2>{{setting('feature.page_title')}}</h2>
    			<p>{{setting('feature.page_description')}}</p>
    		</div>
    		<div class="row">
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_1_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_1_title')}}</h2>
    					<p>{{setting('feature.feature_1_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_2_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_2_title')}}</h2>
    					<p>{{setting('feature.feature_2_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_3_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_3_title')}}</h2>
    					<p>{{setting('feature.feature_3_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_4_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_4_title')}}</h2>
    					<p>{{setting('feature.feature_4_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_5_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_5_title')}}</h2>
    					<p>{{setting('feature.feature_5_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_6_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_6_title')}}</h2>
    					<p>{{setting('feature.feature_6_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_7_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_7_title')}}</h2>
    					<p>{{setting('feature.feature_7_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_8_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_8_title')}}</h2>
    					<p>{{setting('feature.feature_8_description')}}</p>
    				</div>
    			</div>
    			<div class="col-sm-4 user wow fadeIn" style="visibility: visible; animation-name: fadeIn; height:300px;">
    				<div class="user-item">
    					<i class="{{setting('feature.feature_9_icon')}}"></i>
    					<h2 class="th-h3">{{setting('feature.feature_9_title')}}</h2>
    					<p>{{setting('feature.feature_9_description')}}</p>
    				</div>
    			</div>
    	</div>
    </section>
    
	@include('themes.ino.elements.block11')

	@include('themes.ino.elements.block9')
		@include('themes.ino.elements.block8')
@endsection