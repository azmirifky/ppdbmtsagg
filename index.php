<?php 
    include 'koneksi.php';

    if (isset($_POST['submit'])) {
    	//ambil 1 id terbesar di kolom id_pendaftaran ,lalu ambil 5 karakter  aja dari sebelah kanan.

    	$getMaxid = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pendaftaran");
    	$d 	= mysqli_fetch_object($getMaxid);
    	$generateId = 'p'.date('Y').sprintf("%05s", $d->id +1);
    	
    	// proses insert


    	$insert = mysqli_query($conn,"INSERT INTO tb_pendaftaran VALUES(
    		'".$generateId."',
    			'".date('Y-m-d')."',
    			'".$_POST['th_ajaran']."',
    			'".$_POST['nm']."',
    			'".$_POST['tmp_lahir']."',
    			'".$_POST['tgl_lahir']."',
    			'".$_POST['jk']."',
    			'".$_POST['Agama']."',
    			'".$_POST['Alamat']."',
                '".$_POST['nik']."', 
                '".$_POST['ortu']."', 
                '".$_POST['pekerjaan_ortu']."', 
                '".$_POST['email']."', 
                '".$_POST['hp']."', 
                '".$_POST['nisn']."', 
                '".$_POST['asal_sekolah']."' 
                 )");

        if ($insert) {
        	echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
        }else{
        	echo'huft'.mysqli_error($conn);
        }
    }

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPDB MTS NURUL HIKMAH AEK GERGER</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>
<body>
    <!---- bagian box formullir--->

    <section class="box-formulir">

    	<h2>Formulir Pendaftaran Siswa Baru MTS Nurul Hikmah Aek Gerger</h2>


    	<!--bagian from--->
    	<form action="" method="post">
    		<div class="box">
    			<table border="0" class="table-form">
    				<tr>
                        <td>Tanggal Daftar</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_daftar" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2024/2025" readonly="">
                        </td>
                    </tr>
    			</table>
    		</div>

    		<h3>Data Diri Calon Siswa</h3>
    		<form action="" method="post">
    		<div class="box">
    			<table border="0" class="table-form">
    				<tr>
    					<td>Nama Lengkap</td>
    					<td>:</td>
    					<td>
    						<input type="text" name="nm" class="input-control">
    					</td>
    				</tr>
    				<tr>
    					<td>Tempat Lahir</td>
    					<td>:</td>
    					<td>
    						<input type="text" name="tmp_lahir" class="input-control">
    					</td>
    				</tr>
    				<tr>
    					<td>Tangal Lahir</td>
    					<td>:</td>
    					<td>
    						<input type="date" name="tgl_lahir" class="input-control">
    					</td>
    				</tr>
    				<tr>
    					<td>Jenis Kelamin</td>
    					<td>:</td>
    					<td>
    						<input type="radio" name="jk" class="input-control"  value="Laki-laki"> Laki-laki &nbsp; &nbsp; &nbsp;
    						<input type="radio" name="jk" class="input-control"  value="Perempuan"> Perempuan
    					</td>
    				</tr>
    				<tr>
    					<td>Agama</td>
    					<td>:</td>
    					<td>
    						<select class="input-control" name="Agama">
    							<option value="">Pilih</option>
    							<option value="ISLAM">ISLAM</option>
    							<option value="KRISTEN">KRISTEN</option>
    							<option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="BUDHA">KONGHUCU</option>
    							<option value="BUDHA">PROTESTAN</option>
    							
    						</select>
    					</td>
    				</tr>
    				<tr>
    					<td>Alamat Lengkap</td>
    					<td>:</td>
    					<td>
    						<textarea class="input-control" name="Alamat"></textarea>
    				</tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nik" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Orang Tua</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="ortu" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Orang Tua</td>
                        <td>:</td>
                        <td>
                            <select class="input-control" name="pekerjaan_ortu">
                                <option value="">--Pilih--</option>
                                <option value="PNS">PNS</option>
                                <option value="Guru">Guru</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Pedagang">Pedagang</option>
                                <option value="Petani">Petani</option>
                                <option value="Buruh">Buruh</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Siswa</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>No.Hp</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="hp" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>NISN Siswa</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nisn" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>
                           <textarea class="input-control" name="asal_sekolah"></textarea>
                        </td>
                    </tr>
    				<tr>
    					<td></td>
    					<td></td>
    					<td>
    						<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
    					</td>
    				</tr>
    			</table>
    		</div>
    		
    	</form>	





    	
    </section>
</body>
</html>