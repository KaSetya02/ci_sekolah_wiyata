<!-- Outer Row -->
<div class="row justify-content-center mt-3 pt-lg-4">

    <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg " style="background-color:  #f3f8fa  ;">
            <div class="card-body p-lg-3 p-0">
                <!-- Nested Row within Card Body -->
                <div align="center">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900"><img src="<?= base_url(); ?>assets/img/LogoTaruna.png" width="50px"></h1>
                                <span class="h4 text-gray-900">Masuk Sebagai Admin Sekolah</span><br>
                                 <span class="text-muted">Login</span>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                             <div class=" small text-center mt-4">
                                Belum Punya Akun? <a href="<?= base_url('register') ?>" style="text-decoration:none;">Buat Disini!</a><br>
                                <a href="<?= base_url('auth/forgotpassword') ?>" style="text-decoration:none;">Lupa Password!</a><br>
                                 Kembali Kehalaman Website? <a href="<?= base_url('home') ?>" style="text-decoration:none;">Kembali!</a>
                             </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>