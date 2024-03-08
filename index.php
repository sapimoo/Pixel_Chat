<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Pixel Chat</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nama Depan</label>
                        <input type="text" name="fname" placeholder="Masukan Nama" required>
                    </div>
                    <div class="field input">
                        <label>Nama Belakang</label>
                        <input type="text" name="lname" placeholder="Masukan Nama" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Masukan Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Masukan Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Pilih Foto Profil</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" name="submit" value="Lanjutkan ke messenger">
                    </div>
            </form>
            <div class="link">Sudah membuat akun? <a href="login.php">Log in Sekarang!</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>