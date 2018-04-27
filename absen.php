<?php
header('Access-Control-Allow-Origin:*');
header('Content-type:application/json');
	$conn = new mysqli("localhost", "root", "", "test");
	$result = $conn->query("SELECT siswa.*, presensi.tanggal, presensi.status_kehadiran from siswa LEFT JOIN presensi on presensi.id_siswa=siswa.id_siswa where presensi.tanggal BETWEEN '2018/04/01' and '2018/04/30' ORDER BY siswa.nama ASC, presensi.tanggal ASC");
	$outp = array();
	$outp = $result->fetch_all(MYSQLI_ASSOC);
	echo json_encode($outp);


?>