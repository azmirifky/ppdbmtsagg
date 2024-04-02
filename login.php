<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['login'])){
    // cek akun ada apa tidak
    $cek=mysqli_query($conn, "SELECT * FROM tb_admin 
        WHERE username ='".$_POST['username']."'AND password ='".MD5($_POST['password'])."'");
    
    if(mysqli_num_rows($cek) > 0){
        $a = mysqli_fetch_object($cek);

        $_SESSION['stat_login']= true;
        $_SESSION['id']= $a->id_admin;
        $_SESSION['nama']= $a->nm_admin;

        echo '<script>window.location="beranda.php"</script>';
    }else{
        echo '<script>alert("Gagal, username atau password salah")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN ADMIN PPDB MTS AEK GERGER</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        .main-login {
            text-align: center;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }
        .box-login{
            width: 320px;
            min-height: 200px;
            border: 1px solid;
        }
        .btn-login {
            padding: 7px;
            background-color: red;
            color: white;
            border: none;
            font-size: 10px;
        }
        .btn-login:hover {
            cursor: pointer;
            background-color: darkgreen;
        }
    </style>
</head>
<body>
    
    <!--bagian login-->
    <section class="main-login">
        <div class="box-login">
            <h2>Login Admin PPDB MTS Nurul Hikmah Aek Gerger</h2>

            <!-- bagian form login-->
            <form action="" method="post">
                <div class="box">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="username" class="input-control">
                            </td>
                        </tr> 
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td>
                                <input type="password" name="password" class="input-control">
                            </td>
                        </tr> 
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="login" value="Login" class="btn-login">
                            </td>
                        </tr> 
                    </table>
                </div>
            </form>
        </div>
    </section>
</body>
</html>