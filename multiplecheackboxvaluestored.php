<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stored the multiple cheack box value</title>

</head>

<body>
<h1> To stored the multiple cheak box value with implode and foreach </h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<label>Which Color you like? </label>
<br /> <br />
<label> Pink <input type="checkbox" name="check_box[]" value="Pink" /> </label> &nbsp;
<label>Red <input type="checkbox" name="check_box[]"  value="Red"/></label> &nbsp;
<label>Blue <input type="checkbox" name="check_box[]"  value="Blue"/></label>&nbsp;
<label>Yellow <input type="checkbox" name="check_box[]" value="Yellow"/></label>&nbsp;
<label>Other <input type="checkbox" name="check_box[]" value="Other" /></label>&nbsp;
<input type="submit" value="OK" name="ok" />
</form>
<?php
if (isset($_POST['ok']))
{
echo implode(',',$_POST['check_box']);
echo "<br>";
$n=($_POST['check_box']);

foreach ($n as $value)
{
	echo $value;
}
}
?>
</body>
</html>