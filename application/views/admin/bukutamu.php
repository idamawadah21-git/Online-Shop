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
                                        <th>Email</th>
                                        <th>Komentar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($bukutamu as $bt) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $bt['nama']; ?></td>
                                            <td><?= $bt['email']; ?></td>
                                            <td><?= $bt['komentar']; ?></td>
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#newEditModal<?= $bt['id_bukutamu']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url(); ?>web/hapus_bukutamu/<?= $bt['id_bukutamu'];  ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="badge badge-primary">Hapus</a>
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
                foreach ($bukutamu as $bt) : $no++; ?>
                    <div class="modal fade" id="newEditModal<?= $bt['id_bukutamu']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('web/edit_bukutamu'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $bt['id_bukutamu']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $bt['nama']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $bt['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="komentar" name="komentar" value="<?= $bt['komentar']; ?>">
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