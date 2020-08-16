
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      
</head>
<body style="background-color:#f2f2f2 ">

        <div class="container">
<fieldset>

<!-- Form Name -->
<legend><center><h3><b style="text-shadow:1px 1px 0 #f2f2f2" class="label label-success">upload image</b></h3></center></legend>
<br>

 
<!-- Text input-->
<form class="well form-horizontal" method="post" action="img_index2.php" autocomplete="off" submit="true"  enctype="multipart/form-data">

       <div class="form-group">
  <label class="col-md-4 control-label">Name :</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="name" placeholder="Name" class="form-control"  type="text" required="true" >
    </div>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Email :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email"   placeholder="Email" class="form-control"  type="email" required>
    </div>
  </div>
</div>  


<div class="form-group">
  <label class="col-md-4 control-label" >Upload Image :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
  <input name="img"   placeholder="Password" class="form-control"  type="file" required>
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group text-center">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
<a href="img_showdata.php"><button  type="button" class="btn btn-info">Show Images</button></a>

    &nbsp&nbsp&nbsp<button class="btn btn-success" type="submit" name="submit" value="POST" >&nbsp&nbsp&nbsp&nbsp&nbspUpload &nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>

</form>
</div> 
</div>

 </div>


</body>
</html>