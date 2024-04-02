<?php 
    include 'koneksi.php';

   


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<script>
    window.print();
</script>
</head>
<body>
<style>
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
    <h2>Laporan Calon Siswa</h2>
    <table class="table" border="1">
                    <thead>
                        <tr>
                            <th> No </th>
                            <th> ID Pendaftaran </th>
                            <th> Tanggal Daftar </th>
                            <th> Tahun Ajaran </th>
                            <th> Nama </th>
                            <th> Tempat Lahir </th>
                            <th> Tanggal Lahir </th>
                            <th> Jenis Kelamin </th>
                            <th> Agama </th>
                            <th> Alamat </th>
                            <th> NIK </th>
                            <th> Nama Orang Tua </th>
                            <th> Pekerjaan Orang Tua </th>
                            <th> Email </th>
                            <th> No. Hp </th>
                            <th> NISN </th>
                            <th> Asal Sekolah </th>


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
                            <td><?php echo $row ['tgl_daftar'] ?></td>
                            <td><?php echo $row ['th_ajaran'] ?></td>
                            <td><?php echo $row ['nm'] ?></td>
                            <td><?php echo $row ['tmp_lahir'] ?></td>
                            <td><?php echo $row ['tgl_lahir'] ?></td>
                            <td><?php echo $row ['jk'] ?></td>
                            <td><?php echo $row ['Agama'] ?></td>
                            <td><?php echo $row ['Alamat'] ?></td>
                            <td><?php echo $row ['nik'] ?></td>
                            <td><?php echo $row ['ortu'] ?></td>
                            <td><?php echo $row ['pekerjaan_ortu'] ?></td>
                            <td><?php echo $row ['email'] ?></td>
                            <td><?php echo $row ['hp'] ?></td>
                            <td><?php echo $row ['nisn'] ?></td>
                            <td><?php echo $row ['asal_sekolah'] ?></td>
                        
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

</body>
</html>