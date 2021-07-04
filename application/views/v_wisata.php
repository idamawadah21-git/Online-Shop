<section>
 <h1><?php echo $judul ?></h1>
    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
        <h3>Devoyage</h3>
        </header>
        <div class="w3-container"><br/>
        <img src="<?= base_url() ?>assets/gambar/dev.jpg" style="width:500px">
        <p>Jl. Raya Boulevard CBD, Jl. Bogor Nirwana Residence, RT.05/RW.12, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16135</p>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Pesan Tiket</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Pesan Tiket Masuk Wisata</h4>
            </div>
            <div class="modal-body">
                <table style="width:100%">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name=""></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="text" name=""></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name=""></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>Rp. 50.000</td>
                </tr>
                <tr>
                    <td>pembayaran</td>
                    <td>:</td>
                    <td><input type="text" name=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"></td>
                </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            
        </div>
        </div>
        </div><!-- Trigger the modal with a button -->
    </div>
    <hr>
    <div class="w3-card-4" style="width:70%">
        <header class="w3-container w3-light-grey">
        <h3>Devoyage</h3>
        </header>
        <div class="w3-container"><br/>
        <img src="<?= base_url() ?>assets/gambar/dev.jpg" style="width:500px">
        <p>Jl. Raya Boulevard CBD, Jl. Bogor Nirwana Residence, RT.05/RW.12, Mulyaharja, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16135</p>
        </div>
    </div>
 </section>