<script>
	function deleteData(id)
	{
		if(confirm("You want to delete?"))
		{
			window.location.href="deleteteacher.php?teacher_id="+id;
		}
	}
</script>
<h1 style='padding-bottom:10px;color:red'>Teachers</h1>
<?php 
include('../config.php');

echo "<table border='2px' class='table'>";
echo "<tr class='danger'><th colspan='11'><a href='admindashboard.php?info=add_teacher'>Add New</a></th></tr>";
echo "<Tr><th>Teacher Id</th><th>Teacher Name</th><th>Email</th><th>Password</th><th>Mobile</th><th>Address</th><th>Department</th><th>Semester</th><th>Status</th><th>Update</th><th>Delete</th></tr>";

$que=mysqli_query($con, "SELECT * FROM teacher");
while($res=mysqli_fetch_array($que))
{
    echo "<Tr>";
    echo "<td>".$res['teacher_id']."</td>";
    echo "<td>".$res['name']."</td>";
    echo "<td>".$res['eid']."</td>";
    echo "<td>".$res['password']."</td>";
    echo "<td>".$res['mob']."</td>";
    echo "<td>".$res['address']."</td>";

    // Display department name
    $que2=mysqli_query($con, "SELECT * FROM department WHERE department_id='".$res['department_id']."'");
    $res2=mysqli_fetch_array($que2);
    echo "<td>".$res2['department_name']."</td>";

    // Display semester name
    $que1=mysqli_query($con, "SELECT * FROM semester WHERE sem_id='".$res['sem_id']."'");
    $res1=mysqli_fetch_array($que1);
    echo "<td>".$res1['semester_name']."</td>";

    echo "<td>".$res['status']."</td>";
    echo "<td><a href='admindashboard.php?info=updateteacher&teacher_id=".$res['teacher_id']."'>Update</a></td>";
    echo "<td><a href='javascript:deleteData(\"".$res['teacher_id']."\")'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";	
?>
