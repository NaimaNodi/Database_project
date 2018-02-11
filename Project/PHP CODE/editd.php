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
	
    	$newdepartment_head=$_POST['ndepartment_head'];
    	$newteachers=$_POST['nteachers'];
    	$newno_of_courses=$_POST['nno_of_courses'];
    	$newtotal_credit=$_POST['ntotal_credit'];
    	$newno_of_lab=$_POST['nno_of_lab'];
    	$newbudget=$_POST['nbudget'];



    	$department_name=$_REQUEST['department_name'];
    	$sqli="UPDATE department SET department_head='$newdepartment_head', teachers='$newteachers', no_of_courses='$newno_of_courses',total_credit='$newtotal_credit',no_of_lab='$newno_of_lab',budget='$newbudget' where department_name='$department_name' or department_name like '%Art%'";
    	
   
    	$res=mysqli_query($con,$sqli);
    	
    }


?>

<?php
   
    $query="select * from department where department_name='{$_REQUEST['department_name']}'";
    
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
   
    
    ?>



<form  method="post" action="editd.php?department_name=<?php echo $_REQUEST['department_name']; ?>">
<h1>Update!</h1>

<table>

<tr>
<th>
Department Head
</th>
<td>


<input type="text" value="<?php echo $row[1]; ?>" name="ndepartment_head" />

</td>
</tr>


<tr>
<th>
Teachers
</th>
<td>
<input  type="text" value="<?php echo $row[2]; ?>" name="nteachers"/>
</td>
</tr>


<tr>
<th>
No Of Courses
</th>
<td>
<input  type="text" value="<?php echo $row[3]; ?>" name="nno_of_courses"/>
</td>
</tr>



<tr>
<th>
Total Credit
</th>
<td>
<input  type="text" value="<?php echo $row[4]; ?>" name="ntotal_credit"/>
</td>
</tr>



<tr>
<th>
No Of Labs
</th>
<td>
<input  type="text" value="<?php echo $row[5]; ?>" name="nno_of_lab"/>
</td>
</tr>


<tr>
<th>
Budget
</th>
<td>
<input  type="text" value="<?php echo $row[6]; ?>" name="nbudget"/>
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


<a href="dept.php"> Back To Department Table <a>



	<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>

</body>
</html>