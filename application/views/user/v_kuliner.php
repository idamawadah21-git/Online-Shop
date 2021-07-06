<section>
    <h1><?php echo $judul ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
            <h3>Pizza Kayu Bakar</h3>
        </header>
        <div class="w3-container"><br />
            <img src="<?= base_url() ?>assets/gambar/piza.jpg" style="width:500px">
            <p>Lokasi: Jl. Mega Mendung No.1, RT.03/RW.04, Babakan, Kec. Bogor Tengah, Kota Bogor.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pesan Kuliner</button>
        </div>
    </div>
    <hr>
    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
            <h3>Pizza Kayu Bakar</h3>
        </header>
        <div class="w3-container"><br />
            <img src="<?= base_url() ?>assets/gambar/piza.jpg" style="width:500px">
            <p>Lokasi: Jl. Mega Mendung No.1, RT.03/RW.04, Babakan, Kec. Bogor Tengah, Kota Bogor.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pesan Kuliner</button>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Pesan Kuliner</h4>
            </div>
            <form action="<?= base_url('web/kuliner'); ?>" method="post">
                <div class="modal-body">
                    <table style="width:100%">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" required=""></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="alamat_kuliner" name="alamat_kuliner" required=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="jumlah_kuliner" name="jumlah_kuliner" required=""></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="submit"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>

    </div>
</div>