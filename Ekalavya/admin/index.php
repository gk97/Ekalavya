<?php
session_start()
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Administrative Login - Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
</head>
<style>
input[type=text] {
	width: 125%;
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	border: 2px solid orange;
	border-radius: 8px;
}



input[type=password] {
	width: 125%;
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
	margin-left : 50px;
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
?>
<div align="center">
<p class="head1">       ADMINISTRATIVE LOGIN </p><BR><BR><BR>
<form name="form1" method="post" action="login.php">
<table width="490" border="0">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td div align ="center" width="163" class="style2">Login ID </td>
    <td div align="center" width="149"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td  class="style2">Password</td>
    <td ><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td ><input class = "button" name="submit" type="submit" id="submit" value="LOGIN"></td>
  </tr>
  </form>

  		<form action = "../index.php">  
   <tr>
    <td class="style2">&nbsp;</td>
    <td ><input class = "button" name="submit" type="submit" id="submit" value="HOME"></td>
  </tr>
  </form>
  
  
  
</table></td>
  </tr>
</table>

<div>
</body>


</html>
