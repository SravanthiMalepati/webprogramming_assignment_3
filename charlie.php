<html>
<head><title>Charlie</title></head>
<body align = 'center'>
	<h1 align="center"> Did Charlie eat my Lunch Box??</h1>
<?php
	function ate()
	{
		$ate = rand(0,1);
		echo "The random number chose by rand() method is : ";
		echo $ate;
		echo "<br> ";
       if ($ate==1) {
       	echo "<br> ";
       	echo "Charlie ate my lunch";
       	echo "<br> ";
        echo '<img src="chaplin_sad.jpeg" alt="icon" />';
       }
       elseif ($ate==0) {
       	echo "<br> ";
       	echo "Charlie didnt eat my lunch";
       	echo"<br>";
       	echo '<img src="charlie_happy.jpeg" alt="icon" />';
       	echo "<br> ";
       }
		
	}
ate();
?>
</body>
</html>