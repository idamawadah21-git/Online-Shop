<section>
  <h1><?php echo $judul ?></h1>
  <?= $this->session->flashdata('message'); ?>

  <p>Ada Kritik dan Pesan yang ingin Anda Kirimkan kepada Kami. Silahkan isi Data Diri Anda, lalu masukkan Pesan atau Kritik Anda. Besar harapan ada kritik dan pesan demi memperbaiki layanan Kami kepada anda semua.</p>
  <form action="<?= base_url('web/bukutamu'); ?>" method="post">

    <table style="width:100%">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" id="nama" name="nama" required=""></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" id="email" name="email" required=""></td>
      </tr>
      <tr>
        <td>Komentar</td>
        <td>:</td>
        <td><textarea name="komentar" id="komentar"></textarea></td>

      </tr>
    </table>
    <input type="submit" value="Kirim">
  </form>

</section>