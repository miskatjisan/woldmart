@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-sm-12 col-md-12">          
			 <div class="box">
				<div class="box-header with-border">
        <h3 class="box-title">FAQ List <span class="badge badge-pill badge-danger"> {{ count($faq) }} </span></h3>
        <a href="{{ route('add.faq') }}" class="btn btn-success" style="float: right;">Add FAQ</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Question  Name English</th>
								<th>Question Name Others</th>
								<th>Answer Name English</th>
                                <th>Answer Name Others</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($faq as $items)
							<tr>
                                <td>{{ $items->question_en }}</td>
								 <td>{{ $items->question_others }}</td>
                                <td>{!! Str::limit( $items->answer_en, 40 )  !!}</td>
                                <td>{!! Str::limit( $items->answer_others, 40 )  !!}</td>
								
								<td width="20%">
                                    <a href=" {{ route('faq.edit',$items->id) }} " class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('faq.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></a>
                                </td>
	
							</tr>
							
                            @endforeach	
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  
			  <!-- /.box -->          
			</div>
			<!-- /.col-8 -->


   <!-- /.box-body -->
 </div>
 <!-- /.box -->

 
 <!-- /.box -->          
</div>

		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  

        



	  </div>
 



      

@endsection