@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container-full">
	

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add FAQ</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">



					<form   action="{{ route('faq.store') }}"  method="post"   novalidate="">

					@csrf

					  <div class="row">
						<div class="col-12">						
							

							<div class="row"> <!-- Start 6th row -->

								<div class="col-md-6 col-sm-12">

								<div class="form-group">
										<label for="wlastName2"> Question Name English : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="question_en" class="form-control" > 
													<div class="help-block">
														@error('question_en')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>


								</div>  <!--  col md 4 -->

								<div class="col-md-6 col-sm-12">

								<div class="form-group">
										<label for="wlastName2">Question Name Others : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="question_others" class="form-control" > 
													<div class="help-block">
														@error('question_others')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

								</div>  <!--  col md 4 -->

								</div>  <!-- End 6th row -->



											<div class="row"> <!-- Start 10th row -->

												<div class="col-md-6 col-sm-12">

												<div class="form-group">
														<label for="wlastName2">Answer Name English : <span class="danger">*</span> </label>
															<div class="controls">
															<textarea id="editor1" name="answer_en" rows="10" cols="80">
												
															</textarea>
																	<div class="help-block">
																		@error('answer_en')
																		<span class="text-danger">{{ $message }} </span>
																		@enderror
																	</div>
															</div>
													</div>


												</div>  <!--  col md 6 -->

												<div class="col-md-6 col-sm-12">

												<div class="form-group">
														<label for="wlastName2">Answer Name Others : <span class="danger">*</span> </label>
															<div class="controls">
															<textarea id="editor2" name="answer_others" rows="10" cols="80">
												
															</textarea>
																	<div class="help-block">
																		@error('answer_others')
																		<span class="text-danger">{{ $message }} </span>
																		@enderror
																	</div>
															</div>
													</div>

												</div>  <!--  col md 4 -->



												</div>  <!-- End 10th row -->


		<hr>









					  
					
						



						<div class="text-xs-right">
                        <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add FAQ" >
                        </div>

						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>












@endsection