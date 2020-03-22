<html>
<head>
	<title>
		Checker Board
	</title>
</head>

<style type="text/css">

*{
	padding: 0;
	margin: 0;
	align-content: center;
}
	table, td{border-collapse: collapse;
			  align-content: center;}

	.black{
		background-color: black;
		width: 50px;
		height: 50px;
	}

	.red{
		background-color: red;
		width: 50px;
		height: 50px;
	}
</style>

<h1> Checker Board </h1>
<body align="center">
<table align="center">
	<tbody align="center">
<?php
   for($x=0;$x<8;$x++)
   		{
   			echo "<tr>";
   			for($y=0;$y<4;$y++)
   			{
   				echo "<td></td>";

   				if ($x %2 ==0) {
   					echo '<td class="black"></td>';
   					echo '<td class="red"></td>';
   				}
   				elseif ($x%2!=0) {
   					echo '<td class="red"></td>';
   					echo '<td class="black"></td>';
   				}
   	}
   	echo "<tr>";
   }
?>
</tbody>
</table>
</html>