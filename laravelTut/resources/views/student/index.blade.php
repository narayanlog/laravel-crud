@extends("student.layout.master")


@section("title","Emplloyee Application | Listing")

@section("body")
<div class="panel panel-primary">
  <div class="panel-heading">Emplloyee List
    <a href="{{ url('student/create') }}" class="btn btn-success pull-right owtbtn">+ Add Emplloyee</a>
  </div>
  <div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    @foreach($emps as $key)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $key->name }}</td>
        <td>{{ $key->email }}</td>
        <td>
            <a href="{{route('student.edit',$key->id)}}" class="btn btn-info">Edit</a>
            <a href="{{route('student.delete',$key->id)}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>

@endsection