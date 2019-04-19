<?php
session_start();
error_reporting(1);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Adminstrative AreaOnline Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
input[type=text] {
	width: 75%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 2px solid orange;
	border-radius: 8px;
}



input[type=password] {
	width: 75%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 2px solid orange;
	border-radius: 8px;
}

.button {
	background-color:orange ;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 14px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 8px;
	margin-left : 100px;
}

.button:hover {
	background-color: black;
	color: orange;
	border:Orange;
}

h1 {
	text-align: center;
	
}
p{
	font-size:40px;
	color:white;
	text-decoration: underline;
    text-decoration-color:red;
	
}

h2 {
	color:orange;
	
}

h3 {
	text-align: right;
}
img{
    border-radius: 8px;

}


</style>
<body>
<?php
include("header.php");
extract($_POST);
if(isset($submit))
{
	include("../UA/database.php");
	$rs=$cn->query("select * from mst_admin where loginid='$loginid' and pass='$pass'") or die(mysql_error());
	if($rs->num_rows < 1)
	{
		?> <script>
			alert("WARNING : INVAID CREDIANTIALS..ARE YOU WHO YOU THINK YOU ARE .?");
		
		<?php
		header("Location: http://localhost/Online_Exam_newG/admin/login.php");exit;
		
	}
	$_SESSION['alogin']="true";
	
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1>Theres some Kinda error... Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}
?>

<p class="head1">WELCOME TO ADMINISTRATIVE AREA </p>

<p align="center" class="style7"><a href="subadd.php">Add Subject</a></p>
<p align="center" class="style7"><a href="testadd.php">Add Test</a></p>
<p align="center" class="style7"><a href="questionadd.php">Add Question </a></p>

</body>
</html>
