<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Kotak Masuk
                </h4>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>#Tanggal</th>
                    <th>Nama Pengirim</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($inbox) :
                    $no = 1;
                    foreach ($inbox as $i) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $i['inbox_tanggal']; ?></td>
                            <td><?= $i['inbox_nama']; ?></td>
                            <td><?= $i['inbox_email']; ?></td>
                            <td><?= $i['inbox_kontak']; ?></td>
                            <td><?= $i['inbox_pesan']; ?></td>
                            <th>
                               
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('inbox/delete/') . $i['inbox_id'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                
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