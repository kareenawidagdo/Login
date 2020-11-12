<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="img/favicon.ico">
    <style>
        .login {
            width: 200pt;
            height:200pt;
            margin-left: 39%;
            margin-top: 10%;
            padding: 10pt;
            border: 2pt solid #4B0082;
        }
    </style>
</head>
<body bgcolor="#E6E6FA">
    <div class="login">
        <h2>LOGIN</h2>
        <form action="cek_login.php" method="post">
            <p>Username</p>
            <p>
                <input type="text" name="username" placeholder="Enter username">
            </p>
            <p>Password</p>
            <p>
                <input type="password" name="password" placeholder="Enter password">
            </p>
            <p>
                <input type="submit" value="LOGIN">
            </p>
        </form>
    </div>
    <br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
</body>
</html>