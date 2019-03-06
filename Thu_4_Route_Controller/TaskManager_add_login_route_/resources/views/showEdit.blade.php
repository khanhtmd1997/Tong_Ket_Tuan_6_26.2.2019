
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
 
<div class="container">

  <form method="post" action="http://localhost/25.2.2019-LARAVEL/Route_/TaskManager/public/showEdit/<?php echo $customer['id']; ?>">
   {{csrf_field()}}
<!--    <div class="form-group">
    <input type="text" name="id" class="form-control" placeholder="Enter ID" />
   </div> -->
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter Name"  value="<?php echo $customer['name']; ?>" />
   </div>
   <div class="form-group">
    <input type="number" name="sdt" class="form-control" placeholder="Enter Phone" value="<?php echo $customer['sdt']; ?>" />
   </div>
    <div class="form-group">
    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $customer['email']; ?>" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
</div>
 
</body>
</html>