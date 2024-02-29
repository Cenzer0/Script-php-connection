<?php
$koneksi = mysqli_connect("localhost", "zeroing", "1234", "umkm");
$sql = mysql_query ($koneksi) or die(mysql_error());
   $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $phone = $_POST['phone'];
        $total = $_POST['total'];
        $submit = $_POST['submit'];

$query = "INSERT INTO `umkm` (`fname`, `lname`, `email`, `alamat`, `phone`, `total`, `submit`) VALUES ('0', '$fname', '$lname', '$email', '$alamat', '$phone', '$total', '$submit', '')";

mysqli_query($koneksi, $query);

if (isset($_POST['submit'])) {
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  header('Location: ordering.html');
  exit;
}
