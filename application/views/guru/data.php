<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Guru
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('guru/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Guru
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Status/Jabatan</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($guru) :
                    $no = 1;
                    foreach ($guru as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                             <?php if($s['foto'] != null):?>
                                <td> <?php echo "<img src='assets/img/avatar/$s[foto]' style='border: 1px solid #333333;width: 60px;height: 70px;'/>";?></td>
                              
                              <?php else:?>
                                <td><img width="60px" style="border: 1px solid #333333;width: 60px;height: 70px;" class="img-circle" src="<?php echo base_url().'assets/img/avatar/user1.png';?>"></td>
                              <?php endif;?>
                            <td><?= $s['nip']; ?></td>
                            <td><?= $s['nama_guru']; ?></td>
                            <td><?= $s['gender']; ?></td>
                            <td><?= $s['agama']; ?></td>
                            <td><?= $s['status']; ?></td>
                            <td><?= $s['no_telp']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <th>
                                <a href="<?= base_url('guru/edit/') . $s['id_guru'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <?php if (is_admin()) : ?>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('guru/delete/') . $s['id_guru'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                 <?php endif; ?>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div> 