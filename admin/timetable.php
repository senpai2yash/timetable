<script>
	function deleteData(id)
	{
		if(confirm("You want to delete?"))
		{
			window.location.href="delete_timetable.php?timeschedule_id="+id;
		}
	}
</script>
<h1 style='padding-bottom:10px;color:rgb(31 41 55 / var(--tw-text-opacity));'>Time Table</h1>
<?php 
include('../config.php');

echo "<table border='2px' class='table'>";
echo "<tr class='danger'><th colspan='9'><a href='admindashboard.php?info=add_timetable'>Add New</a></th></tr>";
echo "<tr>
<th>Time Schedule Id</th>
<th>Department</th>
<th>Subject Name</th>
<th>Semester Name</th>
<th>Teacher Name</th>
<th>Time</th>
<th>Date</th>
<th>Update</th>
<th>Delete</th>
</tr>";

$que=mysqli_query($con, "SELECT * FROM timeschedule");
while($res=mysqli_fetch_array($que))
{
    echo "<tr>";
    echo "<td>".$res['timeschedule_id']."</td>";
    
    // Display department name
    $que2=mysqli_query($con, "SELECT * FROM department WHERE department_id='".$res['department_name']."'");
    $res2=mysqli_fetch_array($que2);
    echo "<td>".$res2['department_name']."</td>";
    
    // Display subject name
    $que3=mysqli_query($con, "SELECT * FROM subject WHERE subject_id='".$res['subject_name']."'");
    $res3=mysqli_fetch_array($que3);
    echo "<td>".$res3['subject_name']."</td>";
    
    // Display semester name
    $que4=mysqli_query($con, "SELECT * FROM semester WHERE sem_id='".$res['semester_name']."'");
    $res4=mysqli_fetch_array($que4);
    echo "<td>".$res4['semester_name']."</td>";
    
    // Display teacher name
    $que5=mysqli_query($con, "SELECT * FROM teacher WHERE teacher_id='".$res['teacher_id']."'");
    $res5=mysqli_fetch_array($que5);
    echo "<td>".$res5['name']."</td>";
    
    echo "<td>".$res['time']."</td>";
    echo "<td>".$res['date']."</td>";
    echo "<td><a href='admindashboard.php?info=updatetimetable&timeschedule_id=".$res['timeschedule_id']."'>Update</a></td>";
    echo "<td><a href='javascript:deleteData(\"".$res['timeschedule_id']."\")'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";	
?>
