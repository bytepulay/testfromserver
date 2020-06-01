@extends('backend.layouts.master')

@section('css')
  

@endsection

@section('title','Dashboard')

@section('content')    
  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
              <li class="breadcrumb-item active">All Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

   
    <section class="content">
      <!-- Small boxes (Stat box) -->
       
          <div class="card">
            <div class="card-header">
              <div class="row">
                <div class="col-lg-3 col-6">
            <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <p>Total User</p>

                      <h3>45000</h3>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
          <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <p>Total Product</p>

                      <h3>30000</h3>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
          <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <p>Total Dealer</p>

                      <h3>44</h3>
                    </div>
                    <div class="icon">
                      <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
          <!-- ./col -->
                <div class="col-lg-3 col-6">
                  <!-- small box -->
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <p>Total CSD</p>

                      <h3>65</h3>
                    </div>
                    <div class="icon">
                      <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
                    

              </div>


          </div>
      </div>
    </section>    
    <div id="container"></div>
    
      
@endsection
@section('script')



@endsection 



