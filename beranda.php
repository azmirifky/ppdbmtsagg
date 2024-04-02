<?php 
    session_start();
    include 'koneksi.php';
    

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB MTS AGG | ADMINISTRATOR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<style>
    header{
        
        background-color: whitesmoke;
    }
    header::after{
    content: '';
    display: block;
    clear: both;
}
    header h1{
        padding: 15px 25px;
        display: inline-block;
        float: left;
    }
    
header ul{
        float: left;
    }
header ul li{
    padding: 24px 25px;
    display: inline-block;
}
a{
    text-decoration: none;
}
  .content{
    width: 90%;
    padding: 10px;
    box-sizing: border-box;
    margin: 50px auto;

}  
</style>
</head>
<body>
    
        <header>
        <!-- bagian header-->
    <h1><a href="beranda.php"> Admin PPDB MTS AGG</a></h1>
        <ul>   
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data Peserta PPDB</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        <ul>
        </header>

        <!--bagian konten-->
        <section class="content">
            <h2>Beranda</h2>
            <div class="box">
                <h3><?php echo $_SESSION['nama']?>, Selamat Datang di PPDB Online MTS Nurul Hikmah Aek Gerger</h3>
            </div>
            
        </section>
</body>
</html>