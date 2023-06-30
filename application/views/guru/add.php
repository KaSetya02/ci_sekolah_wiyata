<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Guru
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('guru') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?= form_open_multipart(); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="nip">NIP</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-users"></i></span>
                            </div>
                            <input value="<?= set_value('nip'); ?>" name="nip" id="nip" type="text" class="form-control" placeholder="NIP Guru">
                        </div>
                        <?= form_error('nip', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="nama_guru">Nama Guru</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('nama_guru'); ?>" name="nama_guru" id="nama_guru" type="text" class="form-control" placeholder="Nama guru...">
                        </div>
                        <?= form_error('nama_guru', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-left" for="gender">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('gender', 'Laki-laki'); ?> value="Laki-laki" type="radio" id="Laki-laki" name="gender" class="custom-control-input">
                            <label class="custom-control-label" for="Laki-laki">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('gender', 'Perempuan'); ?> value="Perempuan" type="radio" id="Perempuan" name="gender" class="custom-control-input">
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
                            <input value="<?= set_value('agama'); ?>" name="agama" id="agama" type="text" class="form-control" placeholder="Agama...">
                        </div>
                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="status">Status/Jabatan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-book"></i></span>
                            </div>
                            <input value="<?= set_value('status'); ?>" name="status" id="status" type="text" class="form-control" placeholder="Status/Jabatan...">
                        </div>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="no_telp">Nomor Telepon</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input value="<?= set_value('no_telp'); ?>" name="no_telp" id="no_telp" type="text" class="form-control" placeholder="Nomor Telepon...">
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
                            <textarea name="alamat" id="alamat" class="form-control" rows="4" placeholder="Alamat..."><?= set_value('alamat'); ?></textarea>
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-left" for="foto">Foto</label>
                    <div class="col-md-9">
                        <input name="foto" id="foto" type="file"> <br>
                        <small>Biarkan Kosong Jika Tidak Ada</small>
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