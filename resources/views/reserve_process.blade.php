<?php
//require_once 'koneksi.php';

$start = $_POST['start'];
$end = $_POST['end'];
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$input = "insert into user(username, password, level) values ('$username', '$password', '$level')";
if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "reserve";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:reserve/search');
}
?>