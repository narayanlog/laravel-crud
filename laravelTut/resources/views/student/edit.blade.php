@extends("student.layout.master")

@section("title", "Emplloyee Application | Edit Details")


@section("body")

<div class="container">
 <div class="row">
  <div class="col-12">
  <div class="panel panel-primary">
  <div class="panel-heading">Edit Emplloyee
  <a href="{{ url('student') }}" class="btn btn-info pull-right owtbtn"> < Back</a>
  </div>
  <div class="panel-body">
  <form method="post" action="{{action('EmplloyeeController@update', $emps->id)}}" enctype="multipart/form-data">
  
  @csrf
  {{ method_field('PUT') }}

  <input type="hidden" name="_method" value="POST" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$emps ->name}}" placeholder="Enter Name"  />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$emps->email}}" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Update" />
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
   </div>
</form>

  </div>
</div>
  </div>
 </div>
</div>



@endsection