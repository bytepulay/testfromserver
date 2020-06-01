@extends('backend.layouts.master')

@section('css')
  
@endsection

@section('title','Customer')
@section('content')
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Customer</li>
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="card">
		            <div class="card-header">
		             
		              <span>Customer Lists</span>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
			            <table id="customers" class="table table-bordered table-strip">
			                <thead>
			                <tr>
			                  <th>ID</th>
			                  <th>Customer Name</th>
			                  <th>Phone</th>
			                  <th>Address</th>
			                  <th>State</th>
			                  <th>City</th>
			                  <th>Point</th>
			                  <th>Action</th>
			                 

			                </tr>
			                </thead>
			                <tbody>
			                	@foreach($customers as $val)
			                	<tr>
			                		
									<td>{{ $loop->iteration }}</td>
				                	<td>{{$val->name}}</td>
				                	<td>{{$val->phone}}</td>
				                	<td>{{$val->address}}</td>
				                	<td>{{$val->state}}</td>
				                	<td>{{$val->city}}</td>
				                	<td>{{$val->point}}</td>
				                	<td>
				                		<a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
				                	
				                		<form action="" method="post" onclick="return confirm('Do you want to delete this item?')" style="display: inline;">
				                			@csrf
				                			@method('delete')
				                			<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
				                		</form>
				                	</td>
				                	
			                	</tr>
								@endforeach

			                </tbody>
			                
			            </table>
						
						  
						</div>
		            </div>
	          	</div>
	         </div>

    </section>
@endsection

@push('scripts')
 
<script>
  $(function () {
    $("#customers").DataTable({

	    lengthMenu: [50,100,500,1000,5000], 
    });
     	
   
  });
</script>
@endpush