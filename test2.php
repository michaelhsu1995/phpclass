<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="upload"><br/>
	<input type="submit" name="submit">
</form>

<?php


if(isset($_FILES["upload"])){
	echo $_FILES["upload"]["name"]."<br/>";
	echo $_FILES["upload"]["tmp_name"]."<br/>";
	echo $_FILES["upload"]["size"]."<br/>";
	echo $_FILES["upload"]["type"]."<br/>";
	$a=pathinfo($_FILES["upload"]["name"]);
	$t=time();
	
}

if(copy($_FILES["upload"]["tmp_name"],$_FILES["upload"]["name"])){
	echo "success";
}else{
	echo "fail";
}

?>

</body>
</html>