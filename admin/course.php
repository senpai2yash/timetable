<script>
	function deleteData(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href="deletecourse.php?course_id="+id;
		}
	
	}
</script>
<h1 style='padding-bottom:10px;color:red'>Department</h1>
<?php 
include('../config.php');

//<!--data display-->

echo "<table border='2px' class='table'>";
echo "<tr class='danger'><th colspan='4'><a href='admindashboard.php?info=add_course'>Add New</a></th></tr>";
echo "<Tr><th>ID</th><th>Department</th><th>Update</th><th>Delete</th></tr>";

$sql = "SELECT * FROM department";
$result = mysqli_query($con, $sql);

// Check if the query executed successfully
if (!$result) {
    die("Error: " . mysqli_error($con));
}

// Fetch data using mysqli_fetch_array()
while($res = mysqli_fetch_array($result))
{
    echo "<Tr>";
    echo "<td>".$res['department_id']."</td>";
    echo "<td>".$res['department_name']."</td>";
    echo "<td><a href='admindashboard.php?info=updatecourse&department_id=".$res['department_id']."'>Update</a></td>";
    echo "<td><a href='javascript:deleteData(\"".$res['department_id']."\")'>Delete</a></td>";
    echo "</tr>";
}
	
echo "</table>";	

?>
