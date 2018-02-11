<!doctype html>
<html>
<head>
	<title>PHP Syntax</title>
	<style>
	.phpcoding{width:900px; margin:0 auto;background:<?php echo "#ddd"?> ;}
	.headeroption, .footeroption{background: #444;color: #ddd;text-align: center;padding: 20px}
	.headeroption h2, .footeroption h2{margin: 0}
	.maincontent{min-height: 400px;padding: 20px}
	</style>
</head>
<body>

<div class="phpcoding">
	<section class="headeroption">
		<h2 ><?php echo "Bangladesh Army University of Science and Technology, Saidpur."; ?>
		</h2>
	</section>



<?php

error_reporting(0);


$con=mysqli_connect("localhost","root","","project");
    if(mysqli_connect_error())
    {
        echo "error connecting database";
        
    }



    if(isset($_POST['submit']))

	{
	
    	$newname=$_POST['nname'];
    	$newdean=$_POST['ndean'];
    	$newdepartment_no=$_POST['ndepartment_no'];
    	$newdepartment_name=$_POST['ndepartment_name'];



    	$name=$_REQUEST['name'];
    	$sqli="UPDATE faculty SET dean='$newdean', department_no='$newdepartment_no', department_no='$newdepartment_no'where name='$name'";
    	
   
    	$res=mysqli_query($con,$sqli);
    	
    }


?>


<?php
   
    $query="select * from faculty where name='{$_REQUEST['name']}'";
    
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
   
    
    ?>



<form  method="post" action="editf.php?name=<?php echo $_REQUEST['name']; ?>">
<h1>Update!</h1>

<table>

<tr>
<th>
Faculty Name
</th>
<td>


<input type="text" value="<?php echo $row[1]; ?>" name="nname" />

</td>
</tr>


<tr>
<th>
Dean
</th>
<td>
<input  type="text" value="<?php echo $row[2]; ?>" name="ndean"/>
</td>
</tr>


<tr>
<th>
Department No.
</th>
<td>
<input  type="text" value="<?php echo $row[3]; ?>" name="ndepartment_no"/>
</td>
</tr>



<tr>
<th>
Department Name
</th>
<td>
<input  type="text" value="<?php echo $row[4]; ?>" name="ndepartment_name"/>
</td>
</tr>


<tr>
<th>
</th>
<td>
<input type="submit" name="submit" value="update">
</td>
</tr>
</table>
</form>


<a href="faculty.php"> Back To Faculty Table <a>



	<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>

</body>
</html>