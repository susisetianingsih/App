<?php 
require 'koneksi.php';
$input = file_get_contents('php://input');
$data = json_decode($input,true);
$pesan = [];
$no = $data['no'];
$tanggal = $data['tanggal'];
$isi = $data['isi'];

$query = mysqli_query($con,"update diary set tanggal='$tanggal',isi='$isi' where no='$no'");
// if ($query) {
// 	http_response_code(201);
// 	$pesan['status'] = 'sukses';
// }else{
// 	http_response_code(422);
// 	$pesan['status'] = 'gagal';

// }

echo json_encode($pesan);
echo mysqli_error($con);


?>