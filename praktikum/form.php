<?php
if (isset($_GET['error'])) {
	$error=$_GET['error'];
} else {
	$error="";
}

$pesan="";
if($error=="blank_name")
{
$pesan="<font color='#D70808'>Lengkapi nama anda!</font><br>";
}
if($error=="blank_email")
{
$pesan="<font color='#D70808'>Lengkapi email anda!</font>";
}
?>

<html>
<head>
<title>Form Login</title>
</head>
<body>
<h3>FORM LOGIN</h3>	

<form action="redirect.php" method="get"> 
	<table width="400" cellpadding="2" cellspacing="2">
			<tr>
				<td width="50">Nama :</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="50">Email :</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<?php
					echo $pesan;
					?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" value="Submit">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
</body>
</html>


