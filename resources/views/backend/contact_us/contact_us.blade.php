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
        <h3 class="box-title">FAQ List <span class="badge badge-pill badge-danger"> {{ count($contact) }} </span></h3>
       
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Name</th>
								<th>Email Address</th>
                                <th>Comment</th>
                                <th>Time</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($contact as $items)
							<tr>
								 <td>{{ $items->name }}</td>
                                 <td>{{ $items->email }}</td>
                                <td>{!! $items->comment !!}</td>
                                <td>{{ Carbon\Carbon::parse($items->created_at)->diffForHumans()  }}</td>
								
								<td width="20%">
                                <a href="{{ route('contact.view',$items->id) }}" class="btn btn-success" title="View" ><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('contact.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></a>
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