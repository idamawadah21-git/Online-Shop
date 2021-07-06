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
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kuliner as $kl) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $kl['nama_kuliner']; ?></td>
                                            <td><?= $kl['jumlah_kuliner']; ?></td>
                                            <td><?= $kl['alamat_kuliner']; ?></td>

                                            <td>
                                                <a href="" data-toggle="modal" data-target="#newEditModal<?= $kl['id_kuliner']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url(); ?>web/hapus_kuliner/<?= $kl['id_kuliner'];  ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="badge badge-primary">Hapus</a>
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
                foreach ($kuliner as $kl) : $no++; ?>
                    <div class="modal fade" id="newEditModal<?= $kl['id_kuliner']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('web/edit_kuliner'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $kl['id_kuliner']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" value="<?= $kl['nama_kuliner']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="jumlah_kuliner" name="jumlah_kuliner" value="<?= $kl['jumlah_kuliner']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat_kuliner" name="alamat_kuliner" value="<?= $kl['alamat_kuliner']; ?>">
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