<?php 
    include 'koneksi.php';

    $peserta= mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran =   '".$_GET['id']."' ");

    $p = mysqli_fetch_object($peserta);


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pendaftaran Online MTS Nurul Hikmah Aek Gerger</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<script>
    window.print();
</script>
</head>
<body>

    <h2>Bukti Pendaftaran Siswa</h2>
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

</body>
</html>