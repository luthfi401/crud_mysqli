<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>
  <link rel="stylesheet" href="header.css">
 </head>
 <body>
 <a href="../index.php" class="menu">BERANDA</a> ||
 <a href="tambah_user" class="menu">TAMBAH DATA</a>
  <h1>EDIT DATA</h1>

   <?php
 include '../lib/db/conn.php';

   $id = $_GET['id'];

   $query = mysqli_query($conn, "SELECT * FROM register WHERE id = '$id'");

   $res = mysqli_fetch_assoc($query);
   ?>

    <form action="" method="POST">
   <table>
   <tr>
    <td>NIK </td>
    <td><input type="text" name="id" value="<?php echo $res['id'] ?>"></td>
   </tr>
   <tr>
    <td>Nama </td>
    <td><input type="text" name="username" value="<?php echo $res['username'] ?>"></td>
   </tr>
   <tr>
    <td>No Telp</td>
    <td> <input type="text" name="password"value="<?php echo $res['password'] ?>"></td>
   </tr> 
    <tr>
     <td>Alamat</td>
     <td><input type="text" name="nama" value="<?php echo $res['nama'] ?>"></td>
    </tr>
     <tr>
    <td></td>
      <td><input type="submit" name="edit" value="Edit">
    <button type="reset" value="Reset">Reset</button>
     </td>
    </tr>
    </table>
 </form>
 </body>
 </html>
 <?php
  if(isset($_POST['edit'])){

  $id       = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama     = $_POST['nama'];
  
  

   $queryupdate = mysqli_query($conn, "UPDATE register SET username  = '$username',
                                                           password  = '$password',
                                                           nama      = '$nama'
                                                            WHERE id = $id");

   if($queryupdate){
   header('location: ../index.php');
  }else{
   echo "Upss Something wrong..";
  }
  }

   ?>