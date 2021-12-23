<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url("assets/img/1234.jpg");?>);
      
    }
</style>

<body class="bg-login" style="background-size:cover">

    <div class="container">

        <div class="center" align="right">

            <div class="col-xl-4 col-lg-6 col-md-5">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('Registrasi/index') ?>" class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Anda" name="nama">
                                    <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username Anda" name="username">
                                    <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password_1">
                                        <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-user btn-block">Daftar</button>
                            
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('Autentifikasi/login') ?>"><button type="button" class="btn btn-primary ">Sudah punya akun? silahkan login kembali!</button></a>
                            </div>
                            <br>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('SelamatDatang') ?>"><button type="button" class="btn btn-dark btn-sm">Kembali ke beranda</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
