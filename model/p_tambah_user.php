<?php include '../lib/db/conn.php'; ?>

<?php
$a= trim($_POST['username']);
$b= trim($_POST['password']);
$c= trim($_POST['nama']);
$perintah="insert into register values('','$a','$b','$c')";
$simpan=mysqli_query($conn,$perintah);
if($simpan) {
    echo "sukses";
   } else{
    echo "Upss Something wrong..";
   }
?>

