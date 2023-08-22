<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"feedback_system");

$fac=$_GET["fac"];

if ($fac!="") 
{
$res=mysqli_query($conn,"select * from subject where facultyid=$fac");
echo "<select>";
while ($data=mysqli_fetch_array($res)) 
{
    echo "<option>"; echo $data["sub_name"]; echo "</option>";
}
echo "</select>";
}
?>
