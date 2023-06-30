<hr><div class="card-header bg-white">
<h5 class="text-black op-7 mb-2"><img src="<?= base_url(); ?>assets/img/users22.png" width="30px"> Hello, <b class="text-primary"><?= userdata('nama'); ?></b></h5>
        <h4 class="h5 align-middle m-0 font-weight-bold text-success">
           Selamat Datang Di Sistem Informasi Sekolah SMK Taruna Wiyatamandala
        </h4>
    </div>

<br>
<div class="row">
    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="guru" style="text-decoration:none; color:red " >Data Guru</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $guru; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="siswa" style="text-decoration:none; color:#00CB4A  " >Data Siswa</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $siswa; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-warning h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="inbox" style="text-decoration:none; color:#FFB429    " >Kotak Masuk</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $inbox; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-download fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="col-xl-3 col-6 mb-4">
        <div class="card border-left-primary h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="user" style="text-decoration:none; color:#0061FF  " >Total Users</a></div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-address-card fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


