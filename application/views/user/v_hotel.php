<section>
    <h1><?php echo $judul ?></h1>
    <?= $this->session->flashdata('message'); ?>

    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
            <h3>D'Anaya</h3>
        </header>
        <div class="w3-container"><br />
            <img src="<?= base_url() ?>assets/gambar/anaya.jpg" style="width:500px">
            <p>Alamat: Jl. Pakuan Indah No.7, RT.04/RW.11, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143
                Telepon: (0251) 8390120</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pesan Hotel</button>
        </div>
    </div>
    <hr>
    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
            <h3>D'Anaya</h3>
        </header>
        <div class="w3-container"><br />
            <img src="<?= base_url() ?>assets/gambar/anaya.jpg" style="width:500px">
            <p>Alamat: Jl. Pakuan Indah No.7, RT.04/RW.11, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143
                Telepon: (0251) 8390120</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pesan Hotel</button>
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
                <h4 class="modal-title">Pesan THotel</h4>
            </div>
            <form action="<?= base_url('web/hotel'); ?>" method="post">
                <div class="modal-body">
                    <table style="width:100%">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="nama_hotel" name="nama_hotel" required=""></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="alamat_hotel" name="alamat_hotel" required=""></td>
                        </tr>
                        <tr>
                            <td>Waktu Penginapan</td>
                            <td>:</td>
                            <td><input type="text" class="form-control" id="waktu_hotel" name="waktu_hotel" required=""></td>
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