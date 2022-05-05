<?php
  // get the user input
	$age = floatval($_POST['age']);
	$day = $_POST['day'];

  // declare variable
  $cost = "Please make a selection above.";

  // determine the message based on the age and day of the week
  
  if (($age < 5) || ($age > 95)) {
    
		echo 'The cost is FREE for you.';
      
	}
    
	else if (($day == "Tuesday") || ($day == "Thursday")
           
			 || ($age >=12) && ($age <=21)) {
    
		echo 'You get a student discount.';
      
	}
    
	else if (($age > 0) || ($day != "")) {		
    
		echo 'You have to pay regular price.';
      
	}
?>
   
