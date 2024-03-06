
@section('title','Plans page')
@extends('Admin.layout.index')
@section('content')


<div class="content-wrapper">
<div class="container-xxl flex-grow-1 container-p-y">


<div class="row">
          
            <div class="col-lg-12 col-md-12">
           
    
            <div class="card mb-4">
      <h5 class="card-header">Add Plans</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Plan Name</label>
            <input class="form-control typeahead tt-hint" type="text" name="name" placeholder="Service">
          </div>
        
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Price</label>
            <input class="form-control typeahead tt-hint" name="price" type="text">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Price After Discount</label>
            <input class="form-control typeahead tt-hint" name="r_price" type="text">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Img</label>
            <input class="form-control typeahead tt-hint" name="img" type="file">
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Time Limit</label>
            <input class="form-control tt-hint" name="time_limit" type="text">
          </div>
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Add Label</label>
            <input class="form-control tt-hint" name="label" type="text">
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Category</label>
            <select name="category" id="" class="form-control">
                @foreach($services as $services)
                <option value="{{$services->id}}">{{$services->name}}</option>
                @endforeach
            </select>
          </div>
          
          <div class="col-md-12 mb-4">
            <label for="TypeaheadBasic" class="form-label">Plan Description</label>
            <textarea class="form-control typeahead tt-hint" name="disp" type="text" placeholder="Service" id="editor-text"></textarea>
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


@push('script')

<link rel="stylesheet" href="{{asset('assets/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{asset('assets/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src='{{asset("assets/richtexteditor/plugins/all_plugins.js")}}'></script>

<script type="text/javascript">
var editor2 = new RichTextEditor("#editor-text");
</script>


@endpush
@endsection
