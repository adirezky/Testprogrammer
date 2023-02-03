<?php
include "conect.php";
$conn->query("delete from karyawan where nik='".$_GET['nik']."'");

?>