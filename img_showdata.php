<?php
$db=mysqli_connect("localhost","root","","test");
$q= "SELECT id, name, email, img FROM img_data";
$r=$db->query($q);

?>
     <html>
     <head>
              <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>
     <body>
     	<a href="index.php"><button type="button" class="btn btn-info btn-outline" >Go back !</button></a>
        <div class="container">
     <table style="border:2px solid lightblue; " class="table table-hover" border="1" align="center">
	<tr>
     	     	<th>ID</th>
     		    <th>NAME</th>
     		   <th>EMAIL</th>
     		    <th>IMG</th>
     	    </tr>
     	    <?php
	while($rows = $r->fetch_assoc()) 
	{
     ?>
     	    
          <tr>
         	    <td><?php echo$rows['id']?></td>
         	    <td><?php echo$rows['name']?></td>
         	    <td><?php echo$rows['email']?></td>
         	    <td><img src="<?php echo $rows["img"]?>" width=100px;/></td>

         </tr>

           <?php
   }
  ?>
     </table>
</div>
     </body>
     </html>
     