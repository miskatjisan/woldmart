@extends('admin.admin_master')
@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Term and Conditions </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

                <form method="post" action="{{ route('TermandConditions-update') }}" >
		 	@csrf

             <input  type="hidden" name="old_id" value="{{ $TermandConditions->id }}" >

					  <div class="row">
	<div class="col-sm-12 col-md-12">	





<div class="row"> <!-- start 8th row  -->
			<div class="col-sm-12 col-md-6">

	    <div class="form-group">
			<h5>Term and Conditions Details English <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="termand_conditions_en" rows="" cols=""  >{{ $TermandConditions->termand_conditions_en }}</textarea>  
	 		 </div>
		</div>

			</div> <!-- end col md 6 -->

            <div class="col-sm-12 col-md-6">

<div class="form-group">
    <h5>Term and Conditions Details Others <span class="text-danger">*</span></h5>
    <div class="controls">
<textarea id="editor2" name="termand_conditions_others" rows="" cols=""  >{{ $TermandConditions->termand_conditions_others }}</textarea>  
      </div>
</div>

    </div> <!-- end col md 6 -->

					 

		</div> <!-- end 8th row  -->


	 <hr>

	 	<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
						</div>
					</form>




			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>






@endsection 