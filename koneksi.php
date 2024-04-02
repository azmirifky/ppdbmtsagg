<?php 
   // membuat koneksi database
   $host	='localhost';
   $user	='root';
   $pass	='';
   $db		='db_psb2';


   $conn	=mysqli_connect($host, $user, $pass, $db);

   if (!$conn) {
   	echo 'error   :'.mysqli_connect_error($conn);
   	  }
 ?>