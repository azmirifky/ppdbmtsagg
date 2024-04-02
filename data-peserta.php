<?php 
    session_start();
    include 'koneksi.php';


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMINISTRATOR | PPDB MTS AGG </title>
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
.table{
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
}
.table tr{
    height: 30px;
}
.table tr td{
    padding:5px 10px;

}
.table tr td:nth-child(1){
    text-align: center;
}
.btn-login {
            padding: 20x;
            background-color: red;
            color: white;
            border: none;
            font-size: 20px;
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
            <h2>Data Peserta</h2>
            <div class="box">
                <a href="cetak-peserta.php" target="_blank" class="btn-login">Print</a>
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> ID Pendaftaran </th>
                            <th> Nama </th>
                            <th> Jenis Kelamin </th>
                            <th> Aksi </th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
                        while ($row = mysqli_fetch_array($list_peserta)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row ['id_pendaftaran'] ?></td>
                            <td><?php echo $row ['nm'] ?></td>
                            <td><?php echo $row ['jk'] ?></td>
                            <td>
                                <a href="detail-peserta.php?id=<?php echo $row[
                                    'id_pendaftaran'] ?>">Detail</a> ||
                                <a href="hapus-peserta.php?id=<?php echo $row[
                                    'id_pendaftaran'] ?>" onclick="return confirm('Yakin ?')
                                ">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div> 
        </section>
</body>
</html>