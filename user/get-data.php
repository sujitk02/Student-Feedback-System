<?php
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn,"feedback_system");
$q=$_GET["q"];
$sql=mysqli_query($conn,"select * from subject where facultyid ='$q'");
#$result = mysqli_query($sql);
echo "<select name='subj' class='form-control'>";
while($row = mysqli_fetch_array($sql))
{
$a=$row['sub_name'];
echo "<option value=$a>" . $row['sub_name'] . "</option>";
}
echo "</select>";
?>