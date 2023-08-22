<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$t=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$d=mysqli_query($conn,"select distinct subject from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
$e=false;
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	

<style type="text/css">
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

     #customers td,th {
        border: 1px solid #ddd;
        padding: 8px;
      }

     #customers tr:nth-child(even){background-color: #f2f2f2;}

     #customers tr:hover {background-color: #ddd;}

     #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #008B8B;
        color: white;
      }
    </style>

<style type="text/css">
      #cust {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

     #cust td,th {
        border: 1px solid black;
        padding: 8px;
      }

     #cust tr:nth-child(even){background-color: #f2f2f2;}

     #cust tr:hover {background-color: #ddd;}

     #cust th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #00BFFF;
        color: white;
        text-align: center;
      }
    </style>

<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div>
 
<div class="container mt-5">
    <form action="" method="post" class="mb-3">
      <div class="select-block">
      	<table class="table table-bordered">
      		<tr>
      			<th>Select Subject :</th>
      			<td>
      				<select name="subject" class="form-control">
      				<option disabled selected>-- Select Subject --</option>
      				<?php
			        while($data = mysqli_fetch_array($d))
			        {
			            echo "<option value='". $data['subject'] ."'>" .$data['subject'] ."</option>";  // displaying data in option menu
			        }	
			    	  ?>  
        			</select>    
      			</td>
      			<td>
      				<input type="submit" name="submit" vlaue="Choose options" class="btn btn-info">
      			</td>
      		</tr>
      	</table>
      </div>
    </form>

    <?php
            if(isset($_POST['submit'])){
        if(!empty($_POST['subject'])) {
          $selected = $_POST['subject'];
		  $g=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected'");
		 
		  if(mysqli_num_rows($g) > 0)
		  {
			  $e=true;
			  $totalfeedback=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected'");

			  while($totalfeedbacklist=mysqli_fetch_array($totalfeedback)){
				if(mysqli_num_rows($totalfeedback)>0){	  
				$totalfeedbackdata=$totalfeedbacklist["number"];
				}else{
					$q1data=0;
				}
			  }

			  $q1=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques1='5'");
			  while($q1list=mysqli_fetch_array($q1)){
			  if(mysqli_num_rows($q1)>0){	  
			  $q1data=$q1list["number"];
			  }else{
				  $q1data=0;
			  }
			}
			  $q14=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques1='4'");
			  while($q1list4=mysqli_fetch_array($q14)){
			  if(mysqli_num_rows($q14)>0){	  
			  $q1data4=$q1list4["number"];
			  }else{
				  $q1data4=0;
			  }
			}
			  $q13=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques1='3'");
			  while($q1list3=mysqli_fetch_array($q13)){
			  if(mysqli_num_rows($q13)>0){	  
			  $q1data3=$q1list3["number"];
			  }else{
				  $q1data3=0;
			  }
			}
			  $q12=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques1='2'");
			  while($q1list2=mysqli_fetch_array($q12)){
			  if(mysqli_num_rows($q12)>0){	  
			  $q1data2=$q1list2["number"];
			  }else{
				  $q1data2=0;
			  }
			}
			  $q11=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques1='1'");
			  while($q1list1=mysqli_fetch_array($q11)){
			  if(mysqli_num_rows($q11)>0){	  
			  $q1data1=$q1list1["number"];
			  }else{
				  $q1data1=0;
			  }
			}
			  $q1total=(5*$q1data)+(4*$q1data4)+(3*$q1data3)+(2*$q1data2)+(1*$q1data1);
			  $q1Score=(100*$q1total)/(5*$totalfeedbackdata);

			//   q2 start
			  $q2=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques2='5'");
			  while($q2list=mysqli_fetch_array($q2)){
			  if(mysqli_num_rows($q2)>0){	  
			  $q2data=$q2list["number"];
			  }else{
				  $q2data=0;
			  }
			}
			  $q24=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques2='4'");
			  while($q2list4=mysqli_fetch_array($q24)){
			  if(mysqli_num_rows($q24)>0){	  
			  $q2data4=$q2list4["number"];
			  }else{
				  $q2data4=0;
			  }
			}
			  $q23=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques2='3'");
			  while($q2list3=mysqli_fetch_array($q23)){
			  if(mysqli_num_rows($q23)>0){	  
			  $q2data3=$q2list3["number"];
			  }else{
				  $q2data3=0;
			  }
			}
			  $q22=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques2='2'");
			  while($q2list2=mysqli_fetch_array($q22)){
			  if(mysqli_num_rows($q22)>0){	  
			  $q2data2=$q2list2["number"];
			  }else{
				  $q2data2=0;
			  }
			}
			  $q21=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques2='1'");
			  while($q2list1=mysqli_fetch_array($q21)){
			  if(mysqli_num_rows($q21)>0){	  
			  $q2data1=$q2list1["number"];
			  }else{
				  $q2data1=0;
			  }
			}
			  $q2total=(5*$q2data)+(4*$q2data4)+(3*$q2data3)+(2*$q2data2)+(1*$q2data1);
			  $q2Score=(100*$q2total)/(5*$totalfeedbackdata);

			  //   q3 start
			  $q3=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques3='5'");
			  while($q3list=mysqli_fetch_array($q3)){
			  if(mysqli_num_rows($q3)>0){	  
			  $q3data=$q3list["number"];
			  }else{
				  $q3data=0;
			  }
			}
			  $q34=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques3='4'");
			  while($q3list4=mysqli_fetch_array($q34)){
			  if(mysqli_num_rows($q34)>0){	  
			  $q3data4=$q3list4["number"];
			  }else{
				  $q3data4=0;
			  }
			}
			  $q33=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques3='3'");
			  while($q3list3=mysqli_fetch_array($q33)){
			  if(mysqli_num_rows($q33)>0){	  
			  $q3data3=$q3list3["number"];
			  }else{
				  $q3data3=0;
			  }
			}
			  $q32=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques3='2'");
			  while($q3list2=mysqli_fetch_array($q32)){
			  if(mysqli_num_rows($q32)>0){	  
			  $q3data2=$q3list2["number"];
			  }else{
				  $q3data2=0;
			  }
			}
			  $q31=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques3='1'");
			  while($q3list1=mysqli_fetch_array($q31)){
			  if(mysqli_num_rows($q31)>0){	  
			  $q3data1=$q3list1["number"];
			  }else{
				  $q3data1=0;
			  }
			}
			  $q3total=(5*$q3data)+(4*$q3data4)+(3*$q3data3)+(2*$q3data2)+(1*$q3data1);
			  $q3Score=(100*$q3total)/(5*$totalfeedbackdata);


			  //   q4 start
			  $q4=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques4='5'");
			  while($q4list=mysqli_fetch_array($q4)){
			  if(mysqli_num_rows($q4)>0){	  
			  $q4data=$q4list["number"];
			  }else{
				  $q4data=0;
			  }
			}
			  $q44=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques4='4'");
			  while($q4list4=mysqli_fetch_array($q44)){
			  if(mysqli_num_rows($q44)>0){	  
			  $q4data4=$q4list4["number"];
			  }else{
				  $q4data4=0;
			  }
			}
			  $q43=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques4='3'");
			  while($q4list3=mysqli_fetch_array($q43)){
			  if(mysqli_num_rows($q43)>0){	  
			  $q4data3=$q4list3["number"];
			  }else{
				  $q4data3=0;
			  }
			}
			  $q42=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques4='2'");
			  while($q4list2=mysqli_fetch_array($q42)){
			  if(mysqli_num_rows($q42)>0){	  
			  $q4data2=$q4list2["number"];
			  }else{
				  $q4data2=0;
			  }
			}
			  $q41=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques4='1'");
			  while($q4list1=mysqli_fetch_array($q41)){
			  if(mysqli_num_rows($q41)>0){	  
			  $q4data1=$q4list1["number"];
			  }else{
				  $q4data1=0;
			  }
			}
			  $q4total=(5*$q4data)+(4*$q4data4)+(3*$q4data3)+(2*$q4data2)+(1*$q4data1);
			  $q4Score=(100*$q4total)/(5*$totalfeedbackdata);


			  //   q5 start
			  $q5=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques5='5'");
			  while($q5list=mysqli_fetch_array($q5)){
			  if(mysqli_num_rows($q5)>0){	  
			  $q5data=$q5list["number"];
			  }else{
				  $q5data=0;
			  }
			}
			  $q54=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques5='4'");
			  while($q5list4=mysqli_fetch_array($q54)){
			  if(mysqli_num_rows($q54)>0){	  
			  $q5data4=$q5list4["number"];
			  }else{
				  $q5data4=0;
			  }
			}
			  $q53=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques5='3'");
			  while($q5list3=mysqli_fetch_array($q53)){
			  if(mysqli_num_rows($q53)>0){	  
			  $q5data3=$q5list3["number"];
			  }else{
				  $q5data3=0;
			  }
			}
			  $q52=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques5='2'");
			  while($q5list2=mysqli_fetch_array($q52)){
			  if(mysqli_num_rows($q52)>0){	  
			  $q5data2=$q5list2["number"];
			  }else{
				  $q5data2=0;
			  }
			}
			  $q51=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques5='1'");
			  while($q5list1=mysqli_fetch_array($q51)){
			  if(mysqli_num_rows($q51)>0){	  
			  $q5data1=$q5list1["number"];
			  }else{
				  $q5data1=0;
			  }
			}
			  $q5total=(5*$q5data)+(4*$q5data4)+(3*$q5data3)+(2*$q5data2)+(1*$q5data1);
			  $q5Score=(100*$q5total)/(5*$totalfeedbackdata);

			  //   q6 start
			  $q6=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques6='5'");
			  while($q6list=mysqli_fetch_array($q6)){
			  if(mysqli_num_rows($q6)>0){	  
			  $q6data=$q6list["number"];
			  }else{
				  $q6data=0;
			  }
			}
			  $q64=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques6='4'");
			  while($q6list4=mysqli_fetch_array($q64)){
			  if(mysqli_num_rows($q64)>0){	  
			  $q6data4=$q6list4["number"];
			  }else{
				  $q6data4=0;
			  }
			}
			  $q63=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques6='3'");
			  while($q6list3=mysqli_fetch_array($q63)){
			  if(mysqli_num_rows($q63)>0){	  
			  $q6data3=$q6list3["number"];
			  }else{
				  $q6data3=0;
			  }
			}
			  $q62=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques6='2'");
			  while($q6list2=mysqli_fetch_array($q62)){
			  if(mysqli_num_rows($q62)>0){	  
			  $q6data2=$q6list2["number"];
			  }else{
				  $q6data2=0;
			  }
			}
			  $q61=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques6='1'");
			  while($q6list1=mysqli_fetch_array($q61)){
			  if(mysqli_num_rows($q61)>0){	  
			  $q6data1=$q6list1["number"];
			  }else{
				  $q6data1=0;
			  }
			}
			  $q6total=(5*$q6data)+(4*$q6data4)+(3*$q6data3)+(2*$q6data2)+(1*$q6data1);
			  $q6Score=(100*$q6total)/(5*$totalfeedbackdata);


			  //   q7 start
			  $q7=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques7='5'");
			  while($q7list=mysqli_fetch_array($q7)){
			  if(mysqli_num_rows($q7)>0){	  
			  $q7data=$q7list["number"];
			  }else{
				  $q7data=0;
			  }
			}
			  $q74=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques7='4'");
			  while($q7list4=mysqli_fetch_array($q74)){
			  if(mysqli_num_rows($q74)>0){	  
			  $q7data4=$q7list4["number"];
			  }else{
				  $q7data4=0;
			  }
			}
			  $q73=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques7='3'");
			  while($q7list3=mysqli_fetch_array($q73)){
			  if(mysqli_num_rows($q73)>0){	  
			  $q7data3=$q7list3["number"];
			  }else{
				  $q7data3=0;
			  }
			}
			  $q72=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques7='2'");
			  while($q7list2=mysqli_fetch_array($q72)){
			  if(mysqli_num_rows($q72)>0){	  
			  $q7data2=$q7list2["number"];
			  }else{
				  $q7data2=0;
			  }
			}
			  $q71=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques7='1'");
			  while($q7list1=mysqli_fetch_array($q71)){
			  if(mysqli_num_rows($q71)>0){	  
			  $q7data1=$q7list1["number"];
			  }else{
				  $q7data1=0;
			  }
			}
			  $q7total=(5*$q7data)+(4*$q7data4)+(3*$q7data3)+(2*$q7data2)+(1*$q7data1);
			  $q7Score=(100*$q7total)/(5*$totalfeedbackdata);


			  //   q8 start
			  $q8=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques8='5'");
			  while($q8list=mysqli_fetch_array($q8)){
			  if(mysqli_num_rows($q8)>0){	  
			  $q8data=$q8list["number"];
			  }else{
				  $q8data=0;
			  }
			}
			  $q84=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques8='4'");
			  while($q8list4=mysqli_fetch_array($q84)){
			  if(mysqli_num_rows($q84)>0){	  
			  $q8data4=$q8list4["number"];
			  }else{
				  $q8data4=0;
			  }
			}
			  $q83=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques8='3'");
			  while($q8list3=mysqli_fetch_array($q83)){
			  if(mysqli_num_rows($q83)>0){	  
			  $q8data3=$q8list3["number"];
			  }else{
				  $q8data3=0;
			  }
			}
			  $q82=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques8='2'");
			  while($q8list2=mysqli_fetch_array($q82)){
			  if(mysqli_num_rows($q82)>0){	  
			  $q8data2=$q8list2["number"];
			  }else{
				  $q8data2=0;
			  }
			}
			  $q81=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques8='1'");
			  while($q8list1=mysqli_fetch_array($q81)){
			  if(mysqli_num_rows($q81)>0){	  
			  $q8data1=$q8list1["number"];
			  }else{
				  $q8data1=0;
			  }
			}
			  $q8total=(5*$q8data)+(4*$q8data4)+(3*$q8data3)+(2*$q8data2)+(1*$q8data1);
			  $q8Score=(100*$q8total)/(5*$totalfeedbackdata);

			  //   q9 start
			  $q9=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques9='5'");
			  while($q9list=mysqli_fetch_array($q9)){
			  if(mysqli_num_rows($q9)>0){	  
			  $q9data=$q9list["number"];
			  }else{
				  $q9data=0;
			  }
			}
			  $q94=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques9='4'");
			  while($q9list4=mysqli_fetch_array($q94)){
			  if(mysqli_num_rows($q94)>0){	  
			  $q9data4=$q9list4["number"];
			  }else{
				  $q9data4=0;
			  }
			}
			  $q93=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques9='3'");
			  while($q9list3=mysqli_fetch_array($q93)){
			  if(mysqli_num_rows($q93)>0){	  
			  $q9data3=$q9list3["number"];
			  }else{
				  $q9data3=0;
			  }
			}
			  $q92=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques9='2'");
			  while($q9list2=mysqli_fetch_array($q92)){
			  if(mysqli_num_rows($q92)>0){	  
			  $q9data2=$q9list2["number"];
			  }else{
				  $q9data2=0;
			  }
			}
			  $q91=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques9='1'");
			  while($q9list1=mysqli_fetch_array($q91)){
			  if(mysqli_num_rows($q91)>0){	  
			  $q9data1=$q9list1["number"];
			  }else{
				  $q9data1=0;
			  }
			}
			  $q9total=(5*$q9data)+(4*$q9data4)+(3*$q9data3)+(2*$q9data2)+(1*$q9data1);
			  $q9Score=(100*$q9total)/(5*$totalfeedbackdata);

			  

			  	  //   q10 start
					$q10=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques10='5'");
					while($q10list=mysqli_fetch_array($q10)){
					if(mysqli_num_rows($q10)>0){	  
					$q10data=$q10list["number"];
					}else{
						$q10data=0;
					}
				  }
					$q104=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques10='4'");
					while($q10list4=mysqli_fetch_array($q104)){
					if(mysqli_num_rows($q104)>0){	  
					$q10data4=$q10list4["number"];
					}else{
						$q10data4=0;
					}
				  }
					$q103=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques10='3'");
					while($q10list3=mysqli_fetch_array($q103)){
					if(mysqli_num_rows($q103)>0){	  
					$q10data3=$q10list3["number"];
					}else{
						$q10data3=0;
					}
				  }
					$q102=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques10='2'");
					while($q10list2=mysqli_fetch_array($q102)){
					if(mysqli_num_rows($q102)>0){	  
					$q10data2=$q10list2["number"];
					}else{
						$q10data2=0;
					}
				  }
					$q101=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques10='1'");
					while($q10list1=mysqli_fetch_array($q101)){
					if(mysqli_num_rows($q101)>0){	  
					$q10data1=$q10list1["number"];
					}else{
						$q10data1=0;
					}
				  }
					$q10total=(5*$q10data)+(4*$q10data4)+(3*$q10data3)+(2*$q10data2)+(1*$q10data1);
					$q10Score=(100*$q10total)/(5*$totalfeedbackdata);

						  //   q11 start
						  $q11=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques11='5'");
						  while($q11list=mysqli_fetch_array($q11)){
						  if(mysqli_num_rows($q11)>0){	  
						  $q11data=$q11list["number"];
						  }else{
							  $q11data=0;
						  }
						}
						  $q114=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques11='4'");
						  while($q11list4=mysqli_fetch_array($q114)){
						  if(mysqli_num_rows($q114)>0){	  
						  $q11data4=$q11list4["number"];
						  }else{
							  $q11data4=0;
						  }
						}
						  $q113=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques11='3'");
						  while($q11list3=mysqli_fetch_array($q113)){
						  if(mysqli_num_rows($q113)>0){	  
						  $q11data3=$q11list3["number"];
						  }else{
							  $q11data3=0;
						  }
						}
						  $q112=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques11='2'");
						  while($q11list2=mysqli_fetch_array($q112)){
						  if(mysqli_num_rows($q112)>0){	  
						  $q11data2=$q11list2["number"];
						  }else{
							  $q11data2=0;
						  }
						}
						  $q111=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques11='1'");
						  while($q11list1=mysqli_fetch_array($q111)){
						  if(mysqli_num_rows($q111)>0){	  
						  $q11data1=$q11list1["number"];
						  }else{
							  $q11data1=0;
						  }
						}
						  $q11total=(5*$q11data)+(4*$q11data4)+(3*$q11data3)+(2*$q11data2)+(1*$q11data1);
						  $q11Score=(100*$q11total)/(5*$totalfeedbackdata);


						   //   q12 start
						   $q12=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques12='5'");
						   while($q12list=mysqli_fetch_array($q12)){
						   if(mysqli_num_rows($q12)>0){	  
						   $q12data=$q12list["number"];
						   }else{
							   $q12data=0;
						   }
						 }
						   $q124=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques12='4'");
						   while($q12list4=mysqli_fetch_array($q124)){
						   if(mysqli_num_rows($q124)>0){	  
						   $q12data4=$q12list4["number"];
						   }else{
							   $q12data4=0;
						   }
						 }
						   $q123=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques12='3'");
						   while($q12list3=mysqli_fetch_array($q123)){
						   if(mysqli_num_rows($q123)>0){	  
						   $q12data3=$q12list3["number"];
						   }else{
							   $q12data3=0;
						   }
						 }
						   $q122=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques12='2'");
						   while($q12list2=mysqli_fetch_array($q122)){
						   if(mysqli_num_rows($q122)>0){	  
						   $q12data2=$q12list2["number"];
						   }else{
							   $q12data2=0;
						   }
						 }
						   $q121=mysqli_query($conn,"select count(*) as number from feedback where faculty_id='".$_SESSION['faculty_login']."' and subject='$selected' and ques12='1'");
						   while($q12list1=mysqli_fetch_array($q121)){
						   if(mysqli_num_rows($q121)>0){	  
						   $q12data1=$q12list1["number"];
						   }else{
							   $q12data1=0;
						   }
						 }
						   $q12total=(5*$q12data)+(4*$q12data4)+(3*$q12data3)+(2*$q12data2)+(1*$q12data1);
						   $q12Score=(100*$q12total)/(5*$totalfeedbackdata);
		  }
        } else {
          echo 'Please select the value.';
        }

      }
    ?>
  </div>


<div class="row">
<div class="col-sm-12">
	</table>

<table id="customers">
	<thead class="table table-bordered">
			<tr>
				<th>Sr.No</th>
				<th>Name</th>
				<th>Subject</th>
				<th>Quest1</th>
				<th>Quest2</th>
				<th>Quest3</th>
				<th>Quest4</th>
				<th>Quest5</th>
				<th>Quest6</th>
				<th>Quest7</th>
				<th>Quest8</th>
				<th>Quest9</th>
				<th>Quest10</th>
				<th>Quest11</th>
				<th>Quest12</th>
				<th>Quest13</th>
				<th>Quest14</th>
			</tr>
	</thead>
<?php
$j=1;
		if($e){
	while($ro=mysqli_fetch_array($g))
		{
			echo "<tr>";
			echo "<td>".$j."</td>";
			echo "<td>".$ro[1]."</td>";
			//echo "<td>".$row[2]."</td>";
			//echo "<td>".$row[3]."</td>";
			echo "<td>".$ro[4]."</td>";
			echo "<td>".$ro[5]."</td>";
			echo "<td>".$ro[6]."</td>";
			echo "<td>".$ro[7]."</td>";
			echo "<td>".$ro[8]."</td>";
			echo "<td>".$ro[9]."</td>";
			echo "<td>".$ro[10]."</td>";
			echo "<td>".$ro[11]."</td>";
			echo "<td>".$ro[12]."</td>";
			echo "<td>".$ro[13]."</td>";
			echo "<td>".$ro[14]."</td>";
			echo "<td>".$ro[15]."</td>";
			echo "<td>".$ro[16]."</td>";
			echo "<td>".$ro[17]."</td>";
			echo "<td>".$ro[18]."</td>";

			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$j++;
		}
		}
		?>
</table>
</div>
</div>

<div class="row" style="padding-top: 50px;">
<div class="col-sm-12">
	</table>
<div style="padding-bottom: 50px;">
	<h3>Number of Total Feedback: <?php echo $totalfeedbackdata ?></h3>

</div>
<table id="cust">
	<thead>
			<tr>
				<th>Sr.No</th>
				<th>Description</th>
				<th>5<br>Strongly Agree</th>
				<th>4<br>Agree</th>
				<th>3<br>Neutral</th>
				<th>2<br>Disagree</th>
				<th>1<br>Strongly disagree</th>
				<th>Total Score</th>
				<th>%Score</th>
			</tr>
			<tr>
				<td style="background-color:darkorange";>1</td>
				<td style="background-color:darkorange";>Teacher provided the course outline having weekly content plan with list of  required text book</td>
				<td><?php echo "$q1data"?> </td>
				<td><?php echo "$q1data4"?></td>
				<td><?php echo "$q1data3"?></td>
				<td><?php echo "$q1data2"?></td>
				<td><?php echo "$q1data1"?></td>
				<td><?php echo "$q1total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q1Score"?></td>

			</tr>
			<tr>
				<td style="background-color:darkorange";>2</td>
				<td style="background-color:darkorange";>Course objectives,learning outcomes and grading criteria are clear to me</td>
				<td><?php echo "$q2data"?> </td>
				<td><?php echo "$q2data4"?></td>
				<td><?php echo "$q2data3"?></td>
				<td><?php echo "$q2data2"?></td>
				<td><?php echo "$q2data1"?></td>
				<td><?php echo "$q2total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q2Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>3</td>
				<td style="background-color:darkorange";>Course integrates throretical course concepts with the real world examples</td>
				<td><?php echo "$q3data"?> </td>
				<td><?php echo "$q3data4"?></td>
				<td><?php echo "$q3data3"?></td>
				<td><?php echo "$q3data2"?></td>
				<td><?php echo "$q3data1"?></td>
				<td><?php echo "$q3total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q3Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>4</td>
				<td style="background-color:darkorange";>Teacher is punctual,arrives on time and leaves on time</td>
				<td><?php echo "$q4data"?> </td>
				<td><?php echo "$q4data4"?></td>
				<td><?php echo "$q4data3"?></td>
				<td><?php echo "$q4data2"?></td>
				<td><?php echo "$q4data1"?></td>
				<td><?php echo "$q4total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q4Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>5</td>
				<td style="background-color:darkorange";>Teacher is good at stimulating the interest in the course content</td>
				<td><?php echo "$q5data"?> </td>
				<td><?php echo "$q5data4"?></td>
				<td><?php echo "$q5data3"?></td>
				<td><?php echo "$q5data2"?></td>
				<td><?php echo "$q5data1"?></td>
				<td><?php echo "$q5total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q5Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>6</td>
				<td style="background-color:darkorange";>Teacher is good at explaining the subject matter</td>
				<td><?php echo "$q6data"?> </td>
				<td><?php echo "$q6data4"?></td>
				<td><?php echo "$q6data3"?></td>
				<td><?php echo "$q6data2"?></td>
				<td><?php echo "$q6data1"?></td>
				<td><?php echo "$q6total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q6Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>7</td>
				<td style="background-color:darkorange";>Teacher's presentation was clear,loud and easy to understand</td>
				<td><?php echo "$q7data"?> </td>
				<td><?php echo "$q7data4"?></td>
				<td><?php echo "$q7data3"?></td>
				<td><?php echo "$q7data2"?></td>
				<td><?php echo "$q7data1"?></td>
				<td><?php echo "$q7total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q7Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>8</td>
				<td style="background-color:darkorange";>Teacher is good at using innovative teaching methods/ways</td>
				<td><?php echo "$q8data"?> </td>
				<td><?php echo "$q8data4"?></td>
				<td><?php echo "$q8data3"?></td>
				<td><?php echo "$q8data2"?></td>
				<td><?php echo "$q8data1"?></td>
				<td><?php echo "$q8total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q8Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>9</td>
				<td style="background-color:darkorange";>Teacher is available and helpful during counseling hours</td>
				<td><?php echo "$q9data"?> </td>
				<td><?php echo "$q9data4"?></td>
				<td><?php echo "$q9data3"?></td>
				<td><?php echo "$q9data2"?></td>
				<td><?php echo "$q9data1"?></td>
				<td><?php echo "$q9total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q9Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>10</td>
				<td style="background-color:darkorange";>Teacher has competed the whole course as per course outline</td>
				<td><?php echo "$q10data"?> </td>
				<td><?php echo "$q10data4"?></td>
				<td><?php echo "$q10data3"?></td>
				<td><?php echo "$q10data2"?></td>
				<td><?php echo "$q10data1"?></td>
				<td><?php echo "$q10total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q10Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>11</td>
				<td style="background-color:darkorange";>Teacher was always fair and impartial</td>
				<td><?php echo "$q11data"?> </td>
				<td><?php echo "$q11data4"?></td>
				<td><?php echo "$q11data3"?></td>
				<td><?php echo "$q11data2"?></td>
				<td><?php echo "$q11data1"?></td>
				<td><?php echo "$q11total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q11Score"?></td>
			</tr>
			<tr>
				<td style="background-color:darkorange";>12</td>
				<td style="background-color:darkorange";>Assessments conducted are clearly connected to maximize learining objectives</td>
				<td><?php echo "$q12data"?> </td>
				<td><?php echo "$q12data4"?></td>
				<td><?php echo "$q12data3"?></td>
				<td><?php echo "$q12data2"?></td>
				<td><?php echo "$q12data1"?></td>
				<td><?php echo "$q12total"?></td>
				<td style="background-color:#00BFFF";><?php echo "$q12Score"?></td>
			</tr>
	</thead>
</table>
<div style="padding-top: 30px">
	<?php 
		 $totalScore = $q1Score+$q2Score+$q3Score+$q4Score+$q5Score+$q6Score+$q7Score+$q8Score+$q9Score+$q10Score+$q11Score+$q12Score;
	$average = number_format($totalScore/12, 2);
	?>
	<table id="cust" style="width: 30%;">
	<tr>
		<th style="width: 50%;color: black;">Average</th>
		<th style="color: black;"><?php echo "$average"?></th>
	</tr>
	</table>
</div>
</div>
</div>

<?php }?>