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
                                        <th>Waktu</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($hotel as $ht) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $ht['nama_hotel']; ?></td>
                                            <td><?= $ht['waktu_hotel']; ?></td>
                                            <td><?= $ht['alamat_hotel']; ?></td>

                                            <td>
                                                <a href="" data-toggle="modal" data-target="#newEditModal<?= $ht['id_hotel']; ?>" class="badge badge-primary">Edit</a>
                                                <a href="<?= base_url(); ?>web/hapus_hotel/<?= $ht['id_hotel'];  ?>" onclick="return confirm('Apakah Anda Yakin ?');" class="badge badge-primary">Hapus</a>
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
                foreach ($hotel as $ht) : $no++; ?>
                    <div class="modal fade" id="newEditModal<?= $ht['id_hotel']; ?>" tabindex="-1" aria-labelledby="newEditModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newEditModalLabel">Edit Menu</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('web/edit_hotel'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $ht['id_hotel']; ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel" value="<?= $ht['nama_hotel']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="waktu_hotel" name="waktu_hotel" value="<?= $ht['waktu_hotel']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat_hotel" name="alamat_hotel" value="<?= $ht['alamat_hotel']; ?>">
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