                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $judul; ?></h1>
                    </div>
                    <div class="card-body">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="table-responsive">
                            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nomer</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Harga</th>
                                        <th>Email</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($wisata as $ws) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $ws['nama_wisata']; ?></td>
                                            <td><?= $ws['alamat_wisata']; ?></td>
                                            <td><?= $ws['harga_tiket']; ?></td>
                                            <td><?= $ws['email']; ?></td>
                                            <td><?= $ws['jumlah_tiket']; ?></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#newEditModal<?= $ws['id_wisata']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url(); ?>web/hapus_wisata/<?= $ws['id_wisata'];  ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="badge badge-primary">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->

                <?php $no = 0;
                foreach ($wisata as $ws) : $no++; ?>
                    <div class="modal fade" id="newEditModal<?= $ws['id_wisata']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('web/edit_wisata'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $ws['id_wisata']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="<?= $ws['nama_wisata']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat_wisata" name="alamat_wisata" value="<?= $ws['alamat_wisata']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="<?= $ws['harga_tiket']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $ws['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="jumlah_tiket" name="jumlah_tiket" value="<?= $ws['jumlah_tiket']; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="Submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>