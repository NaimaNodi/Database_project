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

<form  method="post" action="insertd.php">
<h1>Add Department</h1>

<table>


<tr>
<th>
Department Name
</th>
<td>
<input  type="text" name="department_name"/>
</td>
</tr>


<tr>
<th>
Department Head
</th>
<td>
<input  type="text" name="department_head"/>
</td>
</tr>


<tr>
<th>
Teachers
</th>
<td>
<input  type="text" name="teachers"/>
</td>
</tr>


<tr>
<th>
No Of Courses
</th>
<td>
<input  type="text" name="no_of_courses"/>
</td>
</tr>



<tr>
<th>
Total Credit
</th>
<td>
<input  type="text" name="total_credit"/>
</td>
</tr>



<tr>
<th>
No Of Labs
</th>
<td>
<input  type="text" name="no_of_lab"/>
</td>
</tr>


<tr>
<th>
Budget
</th>
<td>
<input  type="text" name="budget"/>
</td>
</tr>




<tr>
<th>
</th>
<td>
<button type="submit" name='submit'>Add</button>
</td>
</tr>
</table>
</form>


<section class="maincontent"> 

	</section>

		<section class="footeroption">
			<h2><?php echo "Discipline Knowledge Morality."; ?>
			</h2>
		</section>
</div>

</body>
</html>