@extends('backend.layouts.master')

@section('css')
  
@endsection

@section('title','Dealer')
@section('content')
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Dealers</li>
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
		             	<a href="{{route('admin.dealers.create')}}" class="btn btn-primary btn-sm">
		              <i class="fa fa-plus"></i> add dealer</a>
		             
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
			            <table id="dealers" class="table table-bordered table-strip">
			                <thead>
			                <tr>
			                  <th>ID</th>
			                  <th>Customer Name</th>
			                  <th>Phone</th>
			                  <th>Address</th>
			                  <th>State</th>
			                  <th>Township</th>
			                  <th>Point</th>
			                  <th>Action</th>
			                 

			                </tr>
			                </thead>
			                <tbody>
			                	@foreach($dealers as $val)
			                	<tr>
			                		
									<td>{{ $loop->iteration }}</td>
				                	<td>{{$val->shopname}}</td>
				                	<td>{{$val->phone}}</td>
				                	<td>{{$val->address}}</td>
				                	<td>{{$val->state}}</td>
				                	<td>{{$val->township}}</td>
				                	<td>{{$val->point}}</td>
				                	<td>
				                		<a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
				                	
				                		<form action="{{route('admin.dealers.destroy', $val->id)}}" method="post" onclick="return confirm('Do you want to delete this item?')" style="display: inline;">
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
    $("#dealers").DataTable({

	    lengthMenu: [50,100,500,1000,5000], 
    });
     	
   
  });
</script>
@endpush