<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- message body open -->
            @if(count($errors) > 0)
            <div class="col-xl-10 col-12 col-sm-10 col-lg-10 col-md-10 error">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{$error}}
                </div>
                @endforeach
            </div>
            @endif
  <!-- message body close -->


<div class="container">
  <h2>Stacked form</h2>
  <form method="post" action="{{(route('bank-store'))}}">
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="name" class="form-control" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="number">Account Number:</label>
      <input type="number" class="form-control" placeholder="Enter Account Number" name="account_num">
    </div>
    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" placeholder="Enter Address" name="address">
    </div>
    <div class="form-group">
      <label for="number">Mobile Number:</label>
      <input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobile">
    </div>
    <button type="submit" value="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
