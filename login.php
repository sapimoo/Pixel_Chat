<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Pixel Chat</header>
            <form action="#" autocomplete="off">
                <div class="error-text"></div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Masukan Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Lanjutkan ke messenger">
                    </div>
            </form>
            <div class="link">Belum membuat akun? <a href="index.php">Daftar Sekarang!</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>