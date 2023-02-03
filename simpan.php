<?php
include "conect.php";
$sql=$conn->query("select * from karyawan where nik='".$_POST['nik']."'");
$jml=$sql->num_rows;
if($jml>0){
    $conn->query("update karyawan set nama='".$_POST['nama']."',alamat='".$_POST['alamat']."'
    where nik='".$_POST['nik']."'");
}else{
    $conn->query("insert into karyawan (nik,nama,alamat) values ('".$_POST['nik']."',
    '".$_POST['nama']."','".$_POST['alamat']."')");
}
?>