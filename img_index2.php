<?php
$db=mysqli_connect("localhost","root","","test");

if(isset($_POST['submit']))
{
	$name= $_POST['name'];
$email= $_POST['email'];
// $img= $_POST['img'];



  $files=$_FILES['img'];
  $filename=$files['name'];
  $fileerror=$files['error'];
  $filetmp=$files['tmp_name'];
  $fileext=explode('.', $filename);
 $filecheck=strtolower(end($fileext));
 $fileextstored = array('png','jpg','jpeg');
 if(in_array($filecheck, $fileextstored))
 {
 	$destinationfile='upload/'.$filename;
 	move_uploaded_file($filetmp, $destinationfile);
 
 



 $q= "INSERT INTO img_data(name,email,img) VALUES ('$name','$email','$destinationfile')";
if($db->query($q)==true)
{
	echo "<h2 style='color:green float:center;'>saved...</h2>";
}
else 
{
	echo "<h2 style='color:red float:center;'>failed  !</h2>";
}

}

else{
 	header('location:index.php');
 	 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#f2f2f2 ">
	<a href="index.php"><button type="button" class="btn btn-info">Go back !</button></a>
	<br><br>
    <a href="img_showdata.php"><button type="button" class="btn btn-success">Show</button></a>


</body>
</html>