<?php
	
	$names = array('Chris', 'Jack', 'anotherGuy', 'Jeff');

	$count = 0;

	while($count < count($names)) {
		echo "<li>Hi, my name is $names[$count]</li>";
		$count++;
	}

?>

