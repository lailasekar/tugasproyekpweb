<?php
    require 'function.php';

    if(isset($_POST['llogin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $cekdatabase = mysqli_query($conn, "SELECT * FROM llogin where email='$email' and password='$password'");
        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung>0){
            header('location:index.php');
        } 
        else{
            header('location:login.php');
        };
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <div class="text-center">
                                    <br><br><br>
                                    <h1 class="h1 text-gray-900 mb-4">Selamat Datang di <br> Laboratorium <sup>Informatika</sup> ! </h1>
                                    <h1 class="h6 text-gray-900 mb-4">Silahkan Login..</h1>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email Address..." name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" name="llogin">
                                            Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
<br><br><br><br><br><br><br>
<footer class="sticky-footer color-white font-20">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright ??Laila Sekar Gupita.2000018177</span>
        </div>
    </div>
</footer>
</html>