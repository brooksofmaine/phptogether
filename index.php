<?php
require 'header.php'; 
//require will cause the script to fail without the specified file
echo '<body><h1>Hello World!</h1></body>'; 
//echo prints text into a document, can print html tags
include 'footer.php'; 
//include will allow the script to run but return an error
?>