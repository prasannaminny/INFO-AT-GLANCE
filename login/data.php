<?php
$name=$_POST["t1"];
$phone=$_POST["t2"];
$email=$_POST["t3"];
$blood=$_POST["t4"];
$roll=$_POST["t5"];
$branch=$_POST["t6"];
$year=$_POST["t7"];
$add=$_POST["t8"];
mysql_connect("localhost","root","") or die("connection failed");
mysql_select_db("myproject") or die("database not found");
$q1="insert into login values('$name','$phone','$email','$blood','$roll','$branch','$year','$add')";
mysql_query($q1);
if(mysql_affected_rows()>0)
{
echo"<h2>successfully registered</h2>";
}
else
{
echo"<h2>ERROR</h2>";
}
?>
