<h1 style="color:green">Time Schedule</h1>
<?php 
include('../config.php');

echo "<table border='2px' class='table' height='100px'>";

echo "<Tr>
<th><font color='black'>Department</font></th>
<th><font color='black'>Semester</font></th>
<th><font color='black'>Subject Name</font></th>
<th><font color='black'>Teacher Name</font></th>
<th><font color='black'>Date</font></th>
<th><font color='black'>Time</font></th>
</tr>";
//get user's semester id

   
   
$que4=mysqli_query($con,"select * from student where eid='".$_SESSION['e_id']."'");
$res4=mysqli_fetch_array($que4);


	$que=mysqli_query($con,"select *  from timeschedule where semester_name='".$res4['sem_id']."'");
	while($res=mysqli_fetch_array($que))
	{
	echo "<Tr>";
	
	
	
	//display department name
	$que22=mysqli_query($con,"select *  from department where department_id='".$res['department_name']."'");
	$res22=mysqli_fetch_array($que22);
	
	echo "<td style='color:black'>".$res22['department_name']."</td>" ;
	
	
	//display semester name
	$que4=mysqli_query($con,"select *  from semester where sem_id='".$res4['sem_id']."'");
	$res4=mysqli_fetch_array($que4);
	echo "<td style='color:black'>".$res4['semester_name']."</td>" ;
	
	
	
	//display subject name
	$que33=mysqli_query($con,"select *  from subject where subject_id='".$res['subject_name']."'");
	$res33=mysqli_fetch_array($que33);
	echo "<td style='color:black'>".$res33['subject_name']."</td>" ;
	
	
	//display teacher name
	$que5=mysqli_query($con,"select *  from teacher where teacher_id='".$res['teacher_id']."'");
	$res5=mysqli_fetch_array($que5);
	echo "<td style='color:black'>".$res5['name']."</td>" ;
	
	
	echo "<td style='color:black'>".$res['date']."</td>" ;
	echo "<td style='color:black'>".$res['time']."</td>" ;
				
	?>
    
	<?php 
	echo "</tr>";
	}
	
echo "</table>";	

?>
