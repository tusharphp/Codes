<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function imagevalidation()
{
	var img=document.getElementById('file');
	var filename=img.value;
	var ext=filename.substring(filename.lastIndexOf('.')+1);
	if (ext=="gif" || ext=="GIF" || ext=="JPEG"|| ext=="jpeg" || ext=="jpg" || ext=="JPG")
	{
		return true;
	}
	else
	{
		alert ("Upload Gif or Jpg images only");
		img.focus();
		return false;
	}
}
</script>
</head>

<body>
<input type="file" name="file" id="file" onchange="imagevalidation();" />
</body>
</html>