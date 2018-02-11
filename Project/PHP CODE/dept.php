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



$con=mysqli_connect("localhost","root","","project");

if(mysqli_connect_error())
{
	echo "ERROR";
}
$query="select * from Department";

$result=mysqli_query($con,$query);


?>

<div style=”text-align: center;”>
 <h2>Department Table.</h2>
 <table border=”1” cellpadding=”2” cellspacing=”2”
 style=”width: 100%; margin-left: auto; margin-right: auto;”>
<tr>
 <th>Dept. Name</th>
 <th>Dept. Head</th>
 <th>Teachers</th>
 <th>No.of Courses</th>
 <th>Total Credit</th>
 <th>No.of Labs</th>
 <th>Budget</th>
 <th>Edit</th>
 <th>Delete</th>
 </tr>


 <?php
 while( $row=mysqli_fetch_array($result))
    
    {
        echo "<tr>";
        
        echo "<td>";
        echo "$row[0]";
        echo "</td>";
        

        echo "<td>";
        echo "$row[1]";
        echo "</td>";


        echo "<td>";
        echo "$row[2]";
        echo "</td>";
        


        echo "<td>";
        echo "$row[3]";
        echo "</td>";



        
        echo "<td>";
        echo "$row[4]";
        echo "</td>";
        
        

        echo "<td>";
        echo "$row[5]";
        echo "</td>";



        echo "<td>";
        echo "$row[6]";
        echo "</td>";


        echo "<td>";
        echo "<a href=editd.php?department_name=".$row['department_name']."> Edit </a>";
        echo "</td>";

        echo "<td>";
        echo "<a href=deleted.php?department_name='".$row['department_name']."'> Delete </a>";
        echo "</td>";

        
        
        echo "</tr>";
    
    }
?> 

 </table>
 </div>

 <a href="formd.php"> Insert New Department! <a>
<br>
<a href="home.php"> Back to Home Page<a>

	<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>


</body>
</html>