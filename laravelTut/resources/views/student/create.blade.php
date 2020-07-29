@extends("student.layout.master")

@section("title", "Emplloyee Application | Add Emplloyee")

<!-- message code open -->
@if(session()->get('success'))
      <div class="alert alert-success col-xl-10 col-12 col-sm-10 col-lg-10 col-md-10">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('success') }}
      </div>
      @endif
<!-- message code close -->


@section("body")


<div class="container">
 <div class="row">
  <div class="col-12">
  <div class="panel panel-primary">
  <div class="panel-heading">Create Emplloyee
  <a href="{{ url('student') }}" class="btn btn-info pull-right owtbtn"> < Back</a>
  </div>
  <div class="panel-body">
  <form class="form-horizontal" action="{{url('student/create/{id}')}}" method="post" >
  
  @csrf

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>

  </div>
</div>
  </div>
 </div>
</div>



@endsection