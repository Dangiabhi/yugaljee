@section('title','Home')
@extends('Admin.layout.index')
@section('content')


<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
  <h5 class="card-header">Scrollable Table</h5>
  <div class="card-datatable text-nowrap">
    <table class="dt-scrollableTable table">

   
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Vehicle num</th>
          <th>Phone</th>
          <th>Service</th>
          <th>Type</th>
          <th>Location</th>
          <th>Working</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach($data as $data)
        <tr class="@if($data->status == '0') notworking @elseif($data->status == '1') inprogress @endif ">
            <td>{{$loop->index + 1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->vehicle_num}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->service}}</td>
            <td>{{$data->request_type}}</td>
            <td>{{$data->location}}</td>
            <td>

            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Lilian Fuller" data-bs-original-title="Lilian Fuller">
                <img src="{{asset('admin/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>

            </td>
            <td>{{$data->status}}</td>
            <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="lx15t" aria-expanded="true"><i class="ti ti-dots-vertical"></i></button>
                <div class="dropdown-menu" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(1010.4px, 200.8px, 0px);">
                    <a class="dropdown-item" href="5"><i class="ti ti-pencil me-1"></i> Edit</a>
                    <a class="dropdown-item" href="5"><i class="ti ti-trash me-1"></i> Delete</a>
                </div>
            </div>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>  

@endsection