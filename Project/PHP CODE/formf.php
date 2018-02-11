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

<form  method="post" action="insertf.php">
<h1>Add Department</h1>

<table>


<tr>
<th>
Faculty Name
</th>
<td>
<input  type="text" name="name"/>
</td>
</tr>


<tr>
<th>
Dean
</th>
<td>
<input  type="text" name="dean"/>
</td>
</tr>


<tr>
<th>
Departemnt No.
</th>
<td>
<input  type="text" name="department_no"/>
</td>
</tr>


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