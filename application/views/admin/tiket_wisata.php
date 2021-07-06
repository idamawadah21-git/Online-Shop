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
                                        <th>Jumlah</th>
                                        <th>Email</th>
                                        <th>Harga</th>
                                        <th>Pembayaran</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($tiketwisata as $tw) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $tw['nama']; ?></td>
                                            <td><?= $tw['jumlah']; ?></td>
                                            <td><?= $tw['email']; ?></td>
                                            <td><?= $tw['harga']; ?></td>
                                            <td><?= $tw['pembayaran']; ?></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#newEditModal<?= $tw['id_tiket']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url(); ?>web/hapus_tiketwisata/<?= $tw['id_tiket'];  ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="badge badge-primary">Hapus</a>
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
                foreach ($tiketwisata as $tw) : $no++; ?>
                    <div class="modal fade" id="newEditModal<?= $tw['id_tiket']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('web/edit_tiketwisata'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $tw['id_tiket']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $tw['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $tw['jumlah']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $tw['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $tw['harga']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pembayaran" name="pembayaran" value="<?= $tw['pembayaran']; ?>">
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