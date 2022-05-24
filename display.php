<?php
  	// initialize the counter to 0
	$counter = 0;

	// initalize final sentences as an empty string
	$finalSentences = "";

	// get the user sentence
	$userSentence = $_POST["userSentence"];
	
	// get the user number
	$userNum = intval($_POST["userNum"]);
	
	// use a do..while loop to print each sentence to the iframe
	do {
		// display the sentence joined with a line break
		echo $userSentence . "<br>";

		// increment the counter
		$counter = $counter + 1;
	} while ($counter < $userNum);
?>


