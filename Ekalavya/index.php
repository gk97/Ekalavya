	<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Wel come to Online Exam</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
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
	font-size:100px;
	
}
p{
	font-size:40px;
	color:white;
	text-decoration: underline;
    text-decoration-color:red;
	
}

.h2 {
	color:blue;
	font-size:55px
	
}

h3 {
	text-align: right;
}
img{
    border-radius: 8px;

}


</style>
<body bgcolor="#FFF2CC">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{	//$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	//$dn1=$rs['username'];
	//$dn=mysql_query("select username from mst_user where login='$loginid'");
	//$row1= mysql_fetch_row($dn);
echo "<h1  align=center>- Ekalavya -</h1>";


		echo '<table width="28%"  border="0" align="center">
 <tr>
  
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="h2">Subject for Quiz</a></td>

  </tr><tr></tr><tr></tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="h2">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>
<table width="100%" border="0">
  <tr>
<td valign="top" div align="center"> <font color="#0B5394" size="10">Student Login</font> <form name="form1" method="post" action=""><br>
      <table width="300" border="0">
        <tr>
          <td div align="center"><font size="5">Login ID </font></td>
          <td div align="center"><input name="loginid" type="text" id="loginid2"></td>
        </tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
          <td div align="center" ><font size="5">Password</font></td>
          <td div align="center"><input name="pass" type="password" id="pass2"></td>
        </tr>
	</tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <span ><input name="submit" class = "button" type="submit" id="submit"   value="    SIGN IN    "></span>  </td></form>
        </tr>
</tr>
		
		<form action= "signup.php" action="post">

        <tr>
          <td colspan="2" ><div align="center"><input name="submit" class = "button" type="submit" id="submit"   value="    SIGN UP    "> </div></td>
          </tr>
		  		  </form>

		  
		  <form action= "admin/index.php" action="post">

        <tr>
          <td colspan="2" ><div align="center"><input name="submit" class = "button" type="submit" id="submit"   value="ADMIN LOGIN"> </div></td>
          </tr>
		  		  </form>
      </table>
      
    </td>
    
  </tr>
</table>
<br><BR><BR>
<b>
<marquee scrollamount="10"><h2>For Queries , Contact : NARASIMHAN | Phone  9482840755 | nnarasimahn.nn@gmail.com || GURU KARTHIK | Phone : 8971851318 | gk@gmail.com || SUFIYAN | Phone : 964399212 ||</h2></marquee><b>
</body>
</html>
