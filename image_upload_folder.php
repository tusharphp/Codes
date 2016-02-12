<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body >
<form method="post" action="<?php echo $_SERVER['../formex/PHP_SELF'];?>" enctype="multipart/form-data" />
<strong> Photo : </strong> <input type="file" name="file" id="file"  /><br /> <br />
<input type="submit" name="submit" value="Get Background Image" />
</form>
<?php
if (isset($_POST['submit']))
{
	$file=$_FILES['file'];
	$name1=$file['name'];
	$type=$file['type'];
	$size=$file['size'];
	$tmppath=$file['tmp_name'];
	if($name1!=" ")
	{
		move_uploaded_file($tmppath,'images/'.$name1);
	}
}
?>
<style>
body{ background-image:url(/Tushar/formex/images/<?php echo $name1; ?>)}
</style>




</body>
</html>