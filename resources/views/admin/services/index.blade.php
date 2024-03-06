

    
@section('title','Home')
@extends('Admin.layout.index')
@section('content')

   <div class="content-wrapper">
      <div class="container-xxl flex-grow-1 container-p-y">
         <div class="row">
          <div class="col-lg-8 col-md-12">
<!--  -->
          <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <!-- <th>Id</th> -->
                    <th>Service</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @foreach($service as $serve)
                
                  <tr>
                    <!-- <td>{{$loop->index + 1}}</td> -->
                    <td>{{$serve->name}}</td>
                    <td><p  style="overflow:hidden; width:200px;">{{$serve->disp}}</p></td>
                    <td><img class="table-image" src="{{asset($serve->icon)}}" alt=""></td>
                    <td><img class="table-image" src="{{asset($serve->image)}}" alt=""></td>
                    <td>
                      @if($serve->is_active == '1')
                      <span class="badge bg-label-primary me-1">Active</span>
                      @else
                      <span class="badge bg-label-warning me-1">inactive</span>
                      @endif
                    </td>
                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{$serve->id}}"><i class="ti ti-pencil me-1"></i> Edit</a>
                          <a class="dropdown-item" href="{{$serve->id}}"><i class="ti ti-trash me-1"></i> Delete</a>
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
            <div class="col-lg-4 col-md-12">
           
    
            <div class="card mb-4">
      <h5 class="card-header">Add Services</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <form action="{{route('admin.service.add')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Service Name</label>
            <input class="form-control typeahead tt-hint" type="text" name="name" placeholder="Service">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Service Description</label>
            <textarea class="form-control typeahead tt-hint" name="disp" type="text" placeholder="Service"></textarea>
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Icon</label>
            <input class="form-control typeahead tt-hint" name="icon" type="file">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Images</label>
            <input class="form-control typeahead tt-hint" name="img" type="file">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Is Active</label>
            <input class="typeahead tt-hint" name="is_active" type="checkbox">
          </div>
          <div class="col-md-12 mb-4">
            <input class="form-control typeahead tt-hint" type="submit" value="Submit">
          </div>
          </form>
        </div>
      </div>
    </div>
            </div>
         </div>
      </div>
   </div>

@endsection