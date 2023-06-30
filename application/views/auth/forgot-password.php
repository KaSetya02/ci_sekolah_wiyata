<!-- Outer Row -->
<div class="row justify-content-center mt-5 pt-lg-5">

    <div class="col-xl-7 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg " style="background-color:  #f3f8fa  ;">
            <div class="card-body p-lg-3 p-0">
                <!-- Nested Row within Card Body -->
                <div align="center">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-10">
                        <div class="p-5">
                            <div class="text-center mb-4">
                                <h1 class="h4 text-gray-900"><img src="<?= base_url(); ?>assets/img/LogoTaruna.png" width="50px"></h1>
                                <span class="h4 text-gray-900">Forgot Password</span><br>
                                 <span class="text-muted">Forgot Your Password?</span>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" value="<?= set_value('email'); ?>" type="email" name="email" class="form-control form-control-user" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Ganti Password
                            </button>
                             <div class=" small text-center mt-4">
                               <a href="<?= base_url('auth') ?>" style="text-decoration:none;">Kembali Ke Login</a>
                               
                             </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>