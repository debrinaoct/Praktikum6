<?php
if (isset($_GET['nama']) AND isset($_GET['email'])) {
	$nama=$_GET['nama'];
	$email=$_GET['email'];
	$nama=htmlspecialchars($nama);
	$email=strip_tags($email);
}

else{
	header("Location:form.php?error=variabel_belum_diset");
}
if(empty($nama)) {
	header("Location:form.php?error=blank_name");
}
else{
	if (empty($email)) {
		header("Location:form.php?error=blank_email");
	}

	else{
		echo "<h3><strong>LOGIN HISTORY</strong></h3>";
		echo "Nama: $nama <br>E-mail: $email <br>";
	}
}
?>

<?php date_default_timezone_set('Asia/Jakarta');
$date = new DateTime('yesterday');
echo $date->format('d-m-y & h:i:s');
?>

