<script>
	function deleteData(id)
	{
		if(confirm("You want to delete?"))
		{
			window.location.href="deletesubject.php?subject_id="+id;
		}
	}
</script>
<h1 style='padding-bottom:10px;color:red'>Subject</h1>
<?php 
include('../config.php');

echo "<table border='2px' class='table'>";
echo "<tr class='danger'><th colspan='6'><a href='admindashboard.php?info=add_subject'>Add New</a></th></tr>";
echo "<Tr><th>Subject Id</th><th>Subject Name</th><th>Semester Name</th><th>Department</th><th>Update</th><th>Delete</th></tr>";

$que=mysqli_query($con, "SELECT * FROM subject");
while($res=mysqli_fetch_array($que))
{
    echo "<Tr>";
    echo "<td>".$res['subject_id']."</td>";
    echo "<td>".$res['subject_name']."</td>";

    // Display semester name
    $que1=mysqli_query($con, "SELECT * FROM semester WHERE sem_id='".$res['sem_id']."'");
    $res1=mysqli_fetch_array($que1);
    echo "<td>".$res1['semester_name']."</td>";

    // Display department name
    $que2=mysqli_query($con, "SELECT * FROM department WHERE department_id='".$res['department_id']."'");
    $res2=mysqli_fetch_array($que2);
    echo "<td>".$res2['department_name']."</td>";

    echo "<td><a href='admindashboard.php?info=updatesubject&subject_id=".$res['subject_id']."'>Update</a></td>";
    echo "<td><a href='javascript:deleteData(\"".$res['subject_id']."\")'>Delete</a></td>";
    echo "</tr>";
}

echo "</table>";	
?>
