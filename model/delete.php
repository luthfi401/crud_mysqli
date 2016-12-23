<?php
include '../lib/db/conn.php'; 


  $id = $_GET['id'];

  $queryhapus = mysqli_query($conn, "DELETE FROM register WHERE id = $id");

  if($queryhapus){
  header('location: ../index.php');
 }else{
  echo "Upss Something wrong..";
 }

?>