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

$query="insert into faculty values('".$_REQUEST['name']."','".$_REQUEST['dean']."','".$_REQUEST['department_no']."','".$_REQUEST['department_name']."')";

$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo "ERROR";
}

$result=mysqli_query($con,$query);
    
    
    if($result)
    echo "Inserted!";


?>
<br>
<a href="faculty.php"> Back to Faculty<a>

	<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>

</body>
</html>