<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<select> 
<?php
$a=1;
while ($a<=31)

{
	?>

	<option> <?php  echo "$a"; ?>  </option>
    <?php $a++; } ?>; 
</select>


<select>	
<?php
$b=0;
$month=array ("Jan", "Feb", "Mar", "April", "May", "June", "July","Aug", "Sep", "Oct", "Nov", "Dec" );
while ($b<=11)
{
	?>
    <option> <?php echo "$month[$b]"; ?> </option>
    <?php  $b++; } ?>
 </select>   



<select>	
<?php
$year=1985;
while ($year<=2015)
{
	?>
    <option> <?php echo "$year"; ?> </option>
    <?php  $year++; } ?>;
 </select>   

</body>
</html>