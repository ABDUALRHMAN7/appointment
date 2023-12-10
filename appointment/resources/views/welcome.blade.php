<html>

 <head>
    <h1>صفحة حجز المواعيد</h1>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
 

   <form method="GET"  action="{{route('appointments.create') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Email</label>
     <input type="email" name="email"/>
    </div>
    <div class="form-group">
     <label>Enter Password</label>
     <input type="password" name="password"  />
    </div>
    <div class="form-group">
     <input type="submit" name="login"  value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>
