<?php
$nm = 'Debrina Octrisya Hajjar';
$nim = '20082010131';
$t = 'Surabaya, 15 Oktober 2002';
$e = 'debrinaoct15@gmail.com';
$u = 'UPN "Veteran" Jawa Timur';
$pd = 'Sistem Informasi';
$a = 'Jalan Brawijaya No.12c Kebonsari Tuban Jawa Timur 62317';

echo "<h2><center>BIODATA<center></h2>";
?>

<html>
<body>
<form> 
	<table border="1" width="400" align="center" cellpadding="5" cellspacing="0">
			<tr>
				<td width="120">Nama</td>
				<td><?php echo $nm;?></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><?php echo $nim;?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?php echo $e;?></td>
			</tr>
			<tr>
				<td>Tempat Tanggal Lahir</td>
				<td><?php echo $t;?></td>
			</tr>
			<tr>
				<td>Universitas</td>
				<td><?php echo $u;?></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><?php echo $pd;?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?php echo $a;?></td>
			</tr>
		</table>
</body>
</html>

