<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" type="text" placeholder="Username" />
                                            <label>Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="Password" />
                                            <label>Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input type="submit" name="login" class="btn btn-primary" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <?php
    include '../system/koneksi.php';
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = mysqli_query($con, "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password' AND admin_status = 'Aktif'");

        if (mysqli_num_rows($sql) > 0) {
            session_start();
            $data = mysqli_fetch_assoc($sql);
            $_SESSION['id_admin'] = $data['admin_id'];
            $_SESSION['nama_admin'] = $data['admin_nama'];

            echo "<script>alert('Login Berhasil !');window.location='main.php';</script>";
        } else {
            echo "<script>alert('Login Gagal ! Masukan username dan password yang valid !');window.location='index.php';</script>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>