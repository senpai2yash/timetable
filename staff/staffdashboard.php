<?php 
session_start();
include('../config.php');

if($_SESSION['teacher_id']=="" && $_SESSION['name']=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Time table Staff Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        .my-custom-sidebar {
    background-color: black;
    padding: 20px;
    font-size: 19px;
}
    </style>
   

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
              <p> <span style="color:#FFF" >Hello <?php echo $_SESSION['name'];?>
</p>
            </div>
            
            <!-- Top Menu Items -->
           
                   
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav my-custom-sidebar">
                    <br>
                    <li>
                        <a href="staffdashboard.php?info=timeschedule"><i class="fa fa-fw fa-dashboard"></i>Time Schedule</a>
                    </li>
                    <li>
                        <a href="staffdashboard.php?info=updateprofile"><i class="fa fa-fw fa-bar-chart-o"></i>Update Profile</a>
                    </li>
                    <li>
                        <a href="staffdashboard.php?info=updatepassword"><i class="fa fa-fw fa-table"></i>Update Password</a>
                    </li>
                    <br>
                    <li>
                        <a href="logout.php"><font color="#FFFFFF">Logout</font></a>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                   <div class="col-lg-12" height="1000px;" align="center" margin-top="20px">
                   
               
                
                <?php 
				@$info=$_REQUEST['info'];
				if($info!="")
				{
				if($info=="updatepassword")
				{
					include('updatepassword.php');
					}
				elseif($info=="updateprofile")
				{
					include('updateprofile.php');
					}
					
				elseif($info=="timeschedule")
				{
					include('timeschedule.php');
				}
				
					}
				else
				{
				?>
                  <font
                color="orange"
                size="+3"
                style="margin-top:10px;margin-left: 14px"
                >Teacher Panel</font
              >
                        <img src="img/teacher.png" class="img-responsive" alt="Cinque Terre" width="500" height="100" style=" margin-left: 23px;">
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
