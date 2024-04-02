<?php 
    session_start();
    include 'koneksi.php';

    $peserta =mysqli_query($conn, "SELECT *FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p =mysqli_fetch_object($peserta);

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
            <h2>Detail Peserta</h2>
            <div class="box">
                <table class="table-data" >
                        <tr>
                            <td>Kode Pendaftaran</td>
                            <td>:</td>
                            <td><?php echo $p->id_pendaftaran?></td>
                        </tr>
                        <tr>
                            <td>Tahun Ajaran</td>
                            <td>:</td>
                            <td><?php echo $p->th_ajaran?></td>
                        </tr>
                        <tr>
                            <td>Nama lengkap</td>
                            <td>:</td>
                            <td><?php echo $p->nm?></td>
                        </tr>
                        <tr>
                            <td>Tempat,Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir?></td>
                        </tr>
                        <tr>
                            <td>Jenis kelamin</td>
                            <td>:</td>
                            <td><?php echo $p->jk?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $p->Agama?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $p->Alamat?></td>
                        </tr>
                        <tr>
                            <td>NIK Siswa</td>
                            <td>:</td>
                            <td><?php echo $p->nik?></td>
                        </tr>
                        <tr>
                            <td>Nama Orang Tua</td>
                            <td>:</td>
                            <td><?php echo $p->ortu?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Orang Tua</td>
                            <td>:</td>
                            <td><?php echo $p->pekerjaan_ortu?></td>
                        </tr>
                        <tr>
                            <td>Email Siswa</td>
                            <td>:</td>
                            <td><?php echo $p->email?></td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td>:</td>
                            <td><?php echo $p->hp?></td>
                        </tr>
                        <tr>
                            <td>NISN Siswa</td>
                            <td>:</td>
                            <td><?php echo $p->nisn?></td>
                        </tr>
                        <tr>
                            <td>Asal Sekolah</td>
                            <td>:</td>
                            <td><?php echo $p->asal_sekolah?></td>
                        </tr>
    </table>

            </div> 
        </section>
</body>
</html>