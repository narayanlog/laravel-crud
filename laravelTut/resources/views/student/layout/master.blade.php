<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
    

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <style>
          .owtcontainer{margin-top:50px;}
          .owtbtn{
               margin-top: -6px;
          }
     </style>
</head>
<body>
     <div class="container owtcontainer">
          <div class="row">
          @if($errors->any())
          <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
          </ul>
          </div>

          @endif
          @if(session()->has("studentMessage"))
              <div class="alert alert-success">
                  <p>{{ session()->get("studentMessage") }}</p>
              </div>
          @endif
               @section("body")
               @show
          </div>
     </div>
</body>
</html>