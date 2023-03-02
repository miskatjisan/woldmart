@extends('frontend.common.product_master')

@section('product_content')

@section('title')

About

@endsection


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class='active'>About</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content mb-5">
	<div class="container">
    <div class="contact-page">
		<div class="row" style="text-align:justify">
			
				<div class="col-md-12 contact-map outer-bottom-vs">

                <span class="contact-span">

@if(session()->get('language') == 'others')
    {!! $about->about_others !!}
    @else
    {!! $about->about_en !!}
    @endif

</span>   
					
				</div>
				

			</div><!-- /.contact-page -->
		</div><!-- /.row -->
        </div><!-- /.row -->


        </div><!-- /.row -->
       





        @endsection