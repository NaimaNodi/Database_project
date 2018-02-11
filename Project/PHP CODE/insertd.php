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

$query="insert into Department values('".$_REQUEST['department_name']."','".$_REQUEST['department_head']."','".$_REQUEST['teachers']."','".$_REQUEST['no_of_courses']."','".$_REQUEST['total_credit']."','".$_REQUEST['no_of_lab']."','".$_REQUEST['budget']."')";

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
<a href="dept.php"> Back to Department<a>

	<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>

</body>
</html>