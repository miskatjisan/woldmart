@extends('frontend.common.product_master')

@section('product_content')

@section('title')

Term and Conditions
@endsection


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class='active'>Term and Conditions</li>
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
    {!! $TermandConditions->termand_conditions_others !!}
    @else
    {!! $TermandConditions->termand_conditions_en !!}
    @endif

</span>   
					
				</div>
				

			</div><!-- /.contact-page -->
		</div><!-- /.row -->
        </div><!-- /.row -->


        </div><!-- /.row -->
       





        @endsection