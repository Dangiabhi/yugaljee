@section('title','Plans page')
@extends('Admin.layout.index')
@section('content')


<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">


<div class="row">
          <div class="col-lg-12 col-md-12">
<!--  -->
          <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th> 
                    <th>Name</th>
                    <th>Price</th>
                    <th>Discounted Price</th>
                   
                    <th>Time</th>
                    <th>Label</th>
                    <th>category</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  
                @foreach($plans as $plan)
               
                  <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->price}}</td>
                    <td>{{$plan->r_price}}</td>
                    
                    <td>{{$plan->time}}</td>
                    <td>{{$plan->label}}</td>
                    <td>{{$plan->category}}</td>
                    
                    <td><img class="table-image" src="{{asset($plan->img)}}" alt=""></td>
                   
                    <td>
                      @if($plan->is_active == "on")
                      <span class="badge bg-label-primary me-1">Active</span>
                     @else
                      <span class="badge bg-label-warning me-1">inactive</span>
                      @endif
                     
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href=""><i class="ti ti-pencil me-1"></i> Edit</a>
                          <a class="dropdown-item" href=""><i class="ti ti-trash me-1"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>

              @endforeach


                </tbody>
              </table>
            </div>
<!--  -->
          </div>
            
         </div>
</div>
</div>  


@push('script')
<style>
  #message{
    width: 100%;;
  }
</style>
<link rel="stylesheet" href="{{asset('assets/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{asset('assets/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src='{{asset("assets/richtexteditor/plugins/all_plugins.js")}}'></script>

<script type="text/javascript">
var editor1 = new RichTextEditor("#message");
</script>


@endpush
@endsection