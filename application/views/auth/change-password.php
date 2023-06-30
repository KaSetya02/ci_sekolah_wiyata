<!-- Outer Row -->
<div class="row justify-content-center mt-4 pt-lg-5">

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
                                <span class="h4 text-gray-900">Change Password</span><br>
                                 <span class="text-muted">Change Your Password for  <?= $this->session->userdata('reset_email'); ?></span>
                            </div>
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('auth/changepassword', ['class' => 'user']); ?>
                            <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off"  id="password1" type="password" name="password1" class="form-control form-control-user" placeholder="Enter New Password">
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                            </div>
                             <div class="form-group">
                                <input autofocus="autofocus" autocomplete="off" id="password2" type="password" name="password2" class="form-control form-control-user" placeholder="Repeat Password">
                                <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Ganti Password
                            </button>
                             <br>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>