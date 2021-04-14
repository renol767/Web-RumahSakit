<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <a href="index.php"><i class="fas fa-home"></i> </a>
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" />
                </div>
                <input type="submit" value="Login" class="btn solid" />
            </form>
            <form action="#" class="sign-up-form">
                <a href="index.php"><i class="fas fa-home"></i> </a>
                <h2 class="title">Guest</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama Lengkap(Sesuai KTP)" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="No Hp/Email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" placeholder="Alamat" />
                </div>
                <input type="submit" class="btn" value="Daftar" />
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Tidak Punya Akun ?</h3>
                <p>
                    Klik Tombol dibawah untuk Mendaftar Sebagai Guest. Jika ingin mendaftar silahkan hubungi Bagian Informasi Rumah Sakit Majalengka
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    Guest
                </button>
            </div>
            <img src="gambar/log.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Sudah Punya Akun ?</h3>
                <p>
                    Klik Tombol dibawah untuk Login Sebagai User. Jika ingin mendaftar silahkan hubungi Bagian Informasi Rumah Sakit Majalengka
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Sign in
                </button>
            </div>
            <img src="gambar/reg.png" class="image" alt="" />
        </div>
    </div>
</div>
<script src="app.js"></script>
</body>
</html>