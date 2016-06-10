<?php
//upload directory
$dir  = "/uploads/";
$file = $dir . basename($_FILES["image"]["name"]);
if(isset($_POST["submit"])) {
	//check for file type is image or not
    $test = getimagesize($_FILES["image"]["tmp_name"]);
    if( $test !== false ) {
	   //file is a valid image	
	   move_uploaded_file($_FILES["image"]["tmp_name"],realpath(dirname(__FILE__)).$file);
       echo "File uploaded successfully";      
    } else {
	   //file is not a valid image	
       echo "File is not an image.";
    }
}
exit;
