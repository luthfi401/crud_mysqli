<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="stylesheet" href="header.css">
</head>
<body>
<a href="index.php" class="menu">BERANDA</a> ||
<a href="view/tambah_user" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
<tr style="text-align:center;background-color:#1abc9c">
 <td>No</td>
  <td>id</td>
  <td>Username</td>
  <td>Password</td>
  <td>Nama</td>
  <td>Action</td>
</tr>
  <?php
          include "lib/db/conn.php";
          $no = 0;
  $query = mysqli_query($conn, "SELECT * FROM register ORDER BY id desc") or die (mysqli_error());
       if(mysqli_num_rows($query) == 0){
            echo "<b>Tidak ada data yang tersedia</b>";
            
    }else{
      while($r = mysqli_fetch_assoc($query)):    
          $no++;   
       ?>
    
 <tr style="text-align:center">
  <td><?php echo $no ?></td>
  <td><?php echo $r['id'] ?></td>
  <td><?php echo $r['username'] ?></td>
  <td><?php echo $r['password'] ?></td>
  <td><?php echo $r['nama'] ?></td>
    <td>
   <a href="view/edit.php?id=<?php echo $r['id'] ?>">Edit</a> ||
   <a href="model/delete.php?id=<?php echo $r['id'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
    endwhile;
  }
 ?>
</table>
</form>
</body>
</html>