<html>
<head>
<title>PHP-Array</title>
</head>
<body>
	<h1 align="center">Arrays in PHP </h1>
<?php
	$month = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');
   echo("<br>");
   echo("Printing the array value's using a simple for loop");
   echo("<br>");
   echo("<br>");
   for($x = 0; $x<count($month);$x++)
   		{
   			echo $month[$x];
   			echo("<br>");
   		}

   	echo("<br>");
	echo("<br>");
	echo("<br>");
	echo("<br>");
	echo("<br>");
   echo ("We will now print the unsorted arrays :");
   echo("<br>");
$months1 = array ( 'March', 'September', 'February', 'August',  'May', 'June','April','January', 'July','November', 'December','October');
for($x = 0; $x<count($months1);$x++)
         {
            echo $months1[$x];
            echo("<br>");
         }
   echo("<br>");
   echo("<br>");
   echo("<br>");
   echo("<br>");
   echo ("We have sorted the array and now we will print the sorted array");
   echo("<br>");
   sort($months1);
  for($x = 0; $x<count($months1);$x++)
         {
            echo $months1[$x];
            echo("<br>");
         }
   echo("<br>");
   echo("<br>");
   echo("<br>");
   echo("step1 using for-each");
   echo("<br>");
   foreach ($month as $key ) {
      echo($key);
      echo("<br>");
      }
   echo("<br>");
   echo("<br>");
   echo("<br>");
   echo("step2 using for-each");
   echo("<br>");
   foreach ($months1 as $key1 ) {
      echo($key1);
      echo("<br>");
   }
?>
</body>
</html>