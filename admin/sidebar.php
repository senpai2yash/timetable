<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Custom Font for Sidebar Navigation</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');

html{
    background:url(images/background.png)
}

body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    background: black;
    position: fixed;
    height: 100%;
    width: 15%;
    top: 0;
    left: 0;
    z-index: 1;
    overflow-x: hidden;
    padding-top: 20px;
	border-right:3px solid orange;
}

.sidenav h2 {
    color: orange;
    padding-left: 20px;
}

.sidenav a {
    color: #fff;
    padding: 10px 15px 10px 16px;
    text-decoration: none;
    font-family: 'Bungee', sans-serif;
    font-size: 16px;
    display: block;
}

.sidenav a:hover {
    background: orange;
}

h1 {
    padding: 10px 15px 10px 16px;
    border-bottom-style: solid;
}

.main { 
    margin-top: 2%;
    background: white;
    margin-left: 16%;
    margin-right: 2%;
    padding: 4px 10px;
    display: inline-block;
}

/* Making responsive */
@media screen and (max-width: 600px) {
    .sidenav {
        padding-top: 15px;
        width: 155px;
    }
    .sidenav a {
        padding-left: 20px;
        font-size: 18px;
    }
    .main {
        margin-left: 32%;
        font-size: 15px;
    }
    p {
        display: inline-block;
    }
}
</style>
</head>
<body>
    

<div class="sidenav">
    <a href="dashboard.php"><img src="../admin/images/logo.png" height="55px" alt="Logo"></a>
<hr>
    <a href="department.php">Department</a>
    <a href="semester.php">Semester</a>
    <a href="subject.php">Subject</a>
    <a href="teacher.php">Teachers</a>
    <a href="student.php">Student</a>
    <a href="settings.php">Settings</a>
    <a href="timetable.php">TimeTables</a>
    <br>
    <hr>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
