<?php 
session_start();
include('../config.php');
if($_SESSION['admin']=="")
{
$que=mysqli_query($con,"select * from admin where  user_name='".$_SESSION['admin']."'");
$res=mysqli_fetch_array($que);
$_SESSION=$res;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Time table Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link
      href="font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
	<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); */
    .navbar-ex1-collapse .side-nav a {
        color: white !important;
    }
    /* body {
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-style: normal;
    } */
    .side-nav li a {
      font-size: 19px;
      padding:20px;
    }
</style>
  </head>

  <body>
    <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <p>
            <span style="color: #fff">Hello Admin</span>
        </div>
        <!-- Top Menu Items -->
		
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav" style="background-color: black">
            <li>
              <a href="admindashboard.php?info=course" style="margin-top:40px;" 
                ><i class="fa fa-fw fa-dashboard"></i>Department</a>
            </li>
            <li>
              <a href="admindashboard.php?info=semester"
                ><i class="fa fa-fw fa-bar-chart-o"></i>Semester</a>
            </li>
            <li>
              <a href="admindashboard.php?info=subject"
                ><i class="fa fa-fw fa-table"></i>Subject</a>
            </li>
            <li>
              <a href="admindashboard.php?info=student"
                ><i class="fa fa-fw fa-edit"></i>Student</a>
            </li>
            <li>
              <a href="admindashboard.php?info=teacher"
                ><i class="fa fa-fw fa-desktop"></i>Teacher</a>
            </li>
            <li>
              <a href="admindashboard.php?info=timetable"
                ><i class="fa fa-fw fa-wrench"></i>Time Table</a>
            </li>
            <br>
            <li>
              <<a href="logout.php"><font color="#FFFFFF">Logout</font></a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
            <div
              style="background-color: white;">
              <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="course")
				{
					include('course.php');
					}
				elseif($info=="semester")
				{
					include('semester.php');
					}
				elseif($info=="subject")
				{
					include('subject.php');
				     }
					 
			    elseif($info=="student")
				{
					include('student.php');
					}
				elseif($info=="teacher")
				{
					include('teacher.php');
					}
				elseif($info=="timetable")
				{
					include('timetable.php');
					}
					
				elseif($info=="add_course")
				{
					include('add_course.php');
					}
					
			    elseif($info=="add_subject")
				{
					include('add_subject.php');
					}
					
				elseif($info=="add_semester")
				{
					include('add_semester.php');
					}
					
				elseif($info=="add_teacher")
				{
					include('add_teacher.php');
					}
					
				elseif($info=="add_student")
				{
					include('add_student.php');
					}
					
					
				elseif($info=="add_timetable")
				{
					include('add_timetable.php');
					}

                elseif($info=="updatecourse")
				{
					include('updatecourse.php');
				     }
              
                elseif($info=="updatesemester")
				{
					include('updatesemester.php');
				     }

                elseif($info=="updatesubject")
				{
					include('updatesubject.php');
				     }					 
					
				elseif($info=="updatestudent")
				{
					include('updatestudent.php');
				     }

                elseif($info=="updateteacher")
				{
					include('updateteacher.php');
				     }

                elseif($info=="updatetimetable")
				{
					include('update_timetable.php');
				     }
					 
					}
				else
				{
				?>

              <font
                color="#FF3333"
                size="+3"
                style="margin-left: 435px"
                >Admin Panel</font
              ><br />
              <img
                src="img/admin.jpg"
                class="img-responsive"
                alt="Cinque Terre"
                width="500"
                height="500"
                style=" margin-left: 260px"
              />
              <?php }?>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
