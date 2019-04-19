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

.tt {
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
	color:#29d000;
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
<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<br><h2>You are not Logged On Please Login to Access this Page</h2>";
	echo "<a href=index.php><h3 align=center>Click Here for Login</h3></a>";
	exit();
}
?>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<?php
require("../UA/database.php");

include("header.php");


echo "<br><div  class=head1><h1>Add Test</h1></div>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
$cn->query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')") or die(mysql_error());
echo "<p align=center>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
  <table width="58%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong><h1>Enter Subject ID</h1> </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select class = "tt" name="subid">
<?php
$rsa=$cn->query("Select * from mst_subject order by sub_name");
	  while($row= $rsa->fetch_array())
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> <h1>Enter Test Name </strong></h1></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><h1><strong>Enter Total Question</h1> </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="button" type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
