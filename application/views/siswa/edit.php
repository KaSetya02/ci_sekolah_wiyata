<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Edit Data Siswa
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('siswa') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Back
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open_multipart('', [], ['id_siswa' => $siswa['id_siswa']]); ?>
                  <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="siswa">NISN</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-users"></i></span>
                            </div>
                            <input value="<?= set_value('nama_siswa', $siswa['siswa']); ?>" name="siswa" id="siswa" type="text" class="form-control" placeholder="siswa...">
                        </div>
                        <?= form_error('siswa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="nama_siswa">Nama Siswa</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('nama_siswa', $siswa['nama_siswa']); ?>" name="nama_siswa" id="nama_siswa" type="text" class="form-control" placeholder="Nama siswa...">
                        </div>
                        <?= form_error('nama_siswa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="role">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['gender'] == 'Laki-laki' ? 'checked' : ''; ?> <?= set_radio('gender', 'Laki-laki'); ?> value="Laki-laki" type="radio" id="Laki-laki" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="Laki-laki">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['gender'] == 'Perempuan' ? 'checked' : ''; ?> <?= set_radio('gender', 'Perempuan'); ?> value="Perempuan" type="radio" id="Perempuan" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="Perempuan">Perempuan</label>
                        </div>
                        <?= form_error('gender', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="agama">Agama</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-book"></i></span>
                            </div>
                            <input value="<?= set_value('agama', $siswa['agama']); ?>" name="agama" id="agama" type="text" class="form-control" placeholder="Agama Siswa...">
                        </div>
                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                 <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="kelas">Kelas</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['kelas'] == 'X' ? 'checked' : ''; ?> <?= set_radio('kelas', 'X'); ?> value="X" type="radio" id="X" name="kelas" class="custom-control-input">
                            <label class="custom-control-label" for="X">X</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['kelas'] == 'XI' ? 'checked' : ''; ?> <?= set_radio('kelas', 'XI'); ?> value="XI" type="radio" id="XI" name="kelas" class="custom-control-input">
                            <label class="custom-control-label" for="XI">XI</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['kelas'] == 'XII' ? 'checked' : ''; ?> <?= set_radio('kelas', 'XII'); ?> value="XII" type="radio" id="XII" name="kelas" class="custom-control-input">
                            <label class="custom-control-label" for="XII">XII</label>
                        </div>
                        <?= form_error('kelas', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="jurusan">Program Keahlian</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['jurusan'] == 'RPL' ? 'checked' : ''; ?> <?= set_radio('jurusan', 'RPL'); ?> value="RPL" type="radio" id="RPL" name="jurusan" class="custom-control-input">
                            <label class="custom-control-label" for="RPL">RPL (Rekayasa Perangkat Lunak)</label>
                        </div>
                       <div class="custom-control custom-radio">
                            <input <?= $siswa['jurusan'] == 'TKR' ? 'checked' : ''; ?> <?= set_radio('jurusan', 'TKR'); ?> value="TKR" type="radio" id="TKR" name="jurusan" class="custom-control-input">
                            <label class="custom-control-label" for="TKR">TKR (Teknik Kendaraan Ringan)</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= $siswa['jurusan'] == 'TEI' ? 'checked' : ''; ?> <?= set_radio('jurusan', 'TEI'); ?> value="TEI" type="radio" id="TEI" name="jurusan" class="custom-control-input">
                            <label class="custom-control-label" for="TEI">TEI (Teknik Elektronika Industri)</label>
                        </div>
                        <?= form_error('jurusan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="no_telp">Nomor Telepon</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input value="<?= set_value('no_telp', $siswa['no_telp']); ?>" name="no_telp" id="no_telp" type="text" class="form-control" placeholder="Nomor Telepon...">
                        </div>
                        <?= form_error('no_telp', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Alamat..."><?= set_value('alamat', $siswa['alamat']); ?></textarea>
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="foto">Foto</label>
                    <div class="col-md-9">
                      <?php
                        if($siswa['foto'] !== null) { ?>
                            <div style="margin-bottom: 10px;">
                                 <img src="<?= base_url() ?>assets/img/avatar/<?= $siswa['foto']; ?>" width="100px">
                            </div>
                        <?php } ?>
                        <input name="foto" id="foto" type="file" class="input-group">
                        <small>(Biarkan Kosong Jika Tidak <?= $siswa['foto'] ? 'Diganti' : 'Ada' ?>)</small>
                        <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>