<?php
require 'header.php'; //prints the header
//require will cause the script to fail without the specified file
echo '<body>
		<form action="index.php" method="post">
		<input type="text" name="name" placeholder="Who are you?">
		<button type="submit">Submit</button></form>';
//Creates a form that will send the contents of the name field back to the page when the submit button is pressed
if(!empty($_POST['name'])){ //checks to see if post name has a value
	echo '<h1>Hello ';
	echo $_POST['name']; //Prints hello and the name entered in the form if post name has a value
} else {
	echo '<h1>Hello World'; //prints hello world if post name has no value
}
echo '</h1></body>'; //closes tags opened in the previous function
include 'footer.php'; //prints the footer
//include will allow the script to run but return an error
?>