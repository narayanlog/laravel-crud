@extends("student.layout.master")

@section("title", "Emplloyee Application | View Details")


@section("body")

<div class="container">
<div class="row">
<h3>Emplloyee Application View Form</h3>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($emp as $emp)
      <tr>
        <td>{{ $emp->id }}</td>
        <td>{{ $emp->name }}</td>
        <td>{{ $emp->email }}</td>
      </tr>
      @endforeach
    </tbody> 
  </table>
  </div>
  </div>



@endsection


