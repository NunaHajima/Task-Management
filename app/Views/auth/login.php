<!DOCTYPE html>
<html lang="en">

<head>
<?= $this->include('layouts/admin/dashboard/head') ?>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            
            <div class="col-xl-10 col-lg-20 col-md-20">
            <br>
            <br>
            <br>
            <br>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome </h1>
                                    </div>
                                    <?php if(session()->getFlashData('success')) { ?>
                                        <div class="alert alert-success">
                                            <?= session()->get('success') ?>
                                        </div>
                                    <?php } ?>

                                    <?php if(session()->getFlashdata('errors')) { ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('errors') ?>
                                        </div>
                                    <?php } ?>
                                    <form action="/login" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="emailaddress"  aria-describedby="emailHelp"
                                                name ="emailaddress" placeholder="Enter Email Address..." value="<?= old('emailaddress') ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="example-password" aria-describedby="emailHelp" 
                                                placeholder="Enter password" name="passwordemployee" id="passwordemployee"  <?= old('passwordemployee') ?>>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
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

</html>