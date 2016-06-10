<html>
<head>
<title>Easy ajax image upload with jquery</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 
</head>
<body>
<form id="image-form" action="upload.php" method="post" enctype="multipart/form-data"> 
   <input type="file" name="image" /> 
   <input type="submit" name="submit" value="upload" /> 
</form>
<script type="text/javascript">
$(document).ready(function() { 
    var options = { 
        success: response 
    }; 
    $('#image-form').ajaxForm(options); 
}); 
function response(responseText, statusText, xhr, $form)  { 
   alert(responseText);
} 
</script>
</body>
</html>
