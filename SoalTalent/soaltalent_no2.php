<?php
    // Membuat variabel
    $username="";
    $pass = "";
    $usernameErr = "";
    $passErr = "";
    $username_valid = true;
    $username_valid_msg = "";
    
    // Cek form sudah di klik submit/belum
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $pass = trim($_POST['pass']);
        
        // Cek input kosong
        if(empty($username)){
            $usernameErr = "Username masih kosong.<br>";
        }
        if(empty($pass)){
            $passErr = "Password masih kosong.<br>";
        }
        
        // Kode cek username hanya boleh huruf a-z dan A-Z
        if(!preg_match("/^[a-z_]*$/",$username)){
            $username_valid = false;
            $username_valid_msg = "Hanya huruf kecil dan underscore yang diijinkan<br>";
        }
        
        // Cek semua input sudah diisi apa belum
        if( !empty($username) and !empty($pass) and $username_valid ){
            // Disini tempat menulis kode (semua syarat sudah input terpenuhi).
            // Misalnya menulis kode query ke database
            echo "Selamat semua input sudah diisi dengan benar.<br>";
        }
        
    }
?>

<h3>Validasi</h3>

<form action="soaltalent_no2.php" method="post">
    Username : <input type="text" name="username" value="<?php echo $username; ?>" min=8><br>
        <?php echo $usernameErr.$username_valid_msg; ?>
    Password : <input type="password" name="pass" value="<?php echo $pass; ?>"><br>
        <?php echo $passErr; ?>
    <input type="submit" name="submit" value="Register">
</form>