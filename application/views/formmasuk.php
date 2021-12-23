<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url("assets/img/1234.jpg");?>);
      
    }
</style>

<body class="bg-login" style="background-size:cover">

    <div class="container">

        <!-- Outer Row -->
        <div class="center" align="right">

            <div class="col-xl-4 col-lg-6 col-md-5">

                
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4">LOGIN</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('pesan') ?>

                                    <form method="post" action="<?php echo base_url('Autentifikasi/login') ?>"class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username" name="username">
                                                <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info form-control">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url('Registrasi/index') ?>"><button type="button" class="btn btn-primary ">Belum punya akun? silahkan daftar!</button></a>
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
