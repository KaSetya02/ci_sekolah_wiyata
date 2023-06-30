<!-- Outer Row -->
<div class="row justify-content-center mt-3 mb-3">

    <div class="col-xl-8 col-lg-12 col-md-9">

        <div class="card o-hidden border-1 shadow-lg" style="background-color:  #f3f8fa  ;">
            <div class="card-body p-lg-5 p-0">
                <div class="p-4">
                    <div class="text-center mb-0">
                        <img src="<?= base_url(); ?>assets/img/LogoTaruna.png" width="50px"><br><br>
                        <h1 class="h4 text-gray-900"> Form Daftar Admin</h1>
                        <span class="text-muted">Create Account</span>
                    </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <?= form_open('', ['class' => 'user']); ?>
                    <div class="form-group">
                        <input autofocus="autofocus" autocomplete="off" value="<?= set_value('username'); ?>" type="text" name="username" class="form-control form-control-user" placeholder="Username">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input type="password" name="password2" class="form-control form-control-user" placeholder="Konfirmasi Password">
                                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input value="<?= set_value('nama'); ?>" type="text" name="nama" class="form-control form-control-user" placeholder="Nama Pengguna">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <input value="<?= set_value('email'); ?>" type="email" name="email" class="form-control form-control-user" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input value="<?= set_value('no_telp'); ?>" type="text" name="no_telp" class="form-control form-control-user" placeholder="Telepon">
                                <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Daftar
                    </button>
                    <div class=" small text-center mt-4">
                        Sudah Punya Akun? <a href="<?= base_url('auth') ?>" style="text-decoration:none;">Login Disini!</a><br>
                        <a href="<?= base_url('auth/forgotpassword') ?>" style="text-decoration:none;">Lupa Password!</a><br>Kembali Kehalaman Website? <a href="<?= base_url('home') ?>" style="text-decoration:none;">Kembali!</a>
                    </div>
                    <?= form_close(); ?>

                </div>
            </div>
        </div>

    </div>
</div>