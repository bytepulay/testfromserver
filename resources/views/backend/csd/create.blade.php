@extends('backend.layouts.master')

@section('css')
  
@endsection
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
            </ol>
          </div>
        </div>
      </div>
    </section>
	<section class="content">
	 
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Dealer</h3>
                  
                <a href="{{route('admin.dealers.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
                <form action="{{route('admin.dealers.store')}}" method="POST" autocomplete="off">
                  @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="">Shop Name</label>
                      <input type="text" name="shopname" class="form-control" value="{{old('shopname')}}" id="" placeholder="Shop Name">
                      <span class="text-danger">{{ $errors->first('shopname') }}</span>

                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" name="phone" class="form-control" value="{{old('phone')}}" id="" placeholder="Phone Number">
                      <span class="text-danger">{{ $errors->first('phone') }}</span>

                    </div>

                    <div class="form-group">
                      <label for="">Address</label>
                      <input type="text" name="address" class="form-control" value="{{old('address')}}" id="address" placeholder="Address">
                      <span class="text-danger">{{ $errors->first('address') }}</span>

                    </div>

                     <div class="form-group">
                      <label for="">State</label>
                      <input type="text" name="state" class="form-control" value="{{old('state')}}" id="state" placeholder="State">
                      <span class="text-danger">{{ $errors->first('state') }}</span>

                    </div>

                     <div class="form-group">
                      <label for="">Township</label>
                      <input type="text" name="township" class="form-control" value="{{old('township')}}" id="township" placeholder="Township">
                      <span class="text-danger">{{ $errors->first('township') }}</span>

                    </div>
                 
                    

                    <button type="submit" class="btn btn-primary">Create</button>
                    
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
		<br><br><br><br><br>
  </section>
    
@endsection
@section('script')
 <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
<script>
   $(".date").datepicker( {
    format: "yyyy-mm-dd",
    viewMode: "months", 
    minViewMode: "months",
    autoclose: true,
});
</script>

 <script>
   $(document).ready( function(){
    $('select[name="main_category_id"]').on('change', function(){

        var subcategory=$(this).val();
        if(subcategory){
          $.ajax({
          url: '/admin/sub-categories/getJson/' + subcategory,
          type: "GET",
          dataType: "json",

          success: function(data) {
                        $('select[name="sub_category_id"]').empty();
                        $('select[name="sub_category_id"]').append('<option value="">--Choose Sub Categories--</option>');


                        $.each(data, function(key, value) {
                            $('select[name="sub_category_id"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }, 
                });
        }
    });

    $('select[name="sub_category_id"]').on('change', function(){

        var subcategory=$(this).val();
        if(subcategory){
          $.ajax({
          url: '/admin/sub-data-categories/getJson/' + subcategory,
          type: "GET",
          dataType: "json",

          success: function(data) {
                        $('select[name="sub_data_category_id"]').empty();
                        $('select[name="sub_data_category_id"]').append('<option value="">--Choose Sub Categories--</option>');


                        $.each(data, function(key, value) {
                            $('select[name="sub_data_category_id"]').append('<option value="'+key+'">'+value+'</option>');
                        });
                    }, 
                });
        }
    });
   });
 </script>
@endsection