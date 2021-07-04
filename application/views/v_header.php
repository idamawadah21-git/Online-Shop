<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" >
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/panel.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/tiny.js"></script>
    
<script type="text/javascript">
tinyMCE.init({
        	// General options
        	mode : "textareas",
        	theme : "advanced",
});
</script>
<style>
    .flex{
    display:flex; /*Deklarasi display flex + antek2nya*/
    -moz-display:flex; 
    -webkit-display:flex; 
    -khtml-display:flex; 
    -o-display:flex; 
    justify-content:space-between;} /*auto margin antar konten didalamnya*/
.flex .isi{
    width:30%; /*lebarnya terserah, dikira-kira aja*/
    margin:10px; 
    padding:10px;}
</style>
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Pariwisata Bogor</h1>
                <h3>Sistem Informasi Pariwisata Bogor</h3>
            </hgroup>
            <div class="w3-bar w3-light-grey">
                <a href="<?php echo base_url().'index.php/web' ?>" class="w3-bar-item w3-button">Home</a>
                <a href="<?php echo base_url().'index.php/web/gallery' ?>" class="w3-bar-item w3-button">Gallery</a>
                <a href="<?php echo base_url().'index.php/web/bukutamu' ?>" class="w3-bar-item w3-button">Buku Tamu</a>
                <div class="w3-dropdown-hover">
                <button class="w3-button">Informasi Kota</button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="<?php echo base_url().'index.php/web/kuliner' ?>" class="w3-bar-item w3-button">Kuliner</a>
                    <a href="<?php echo base_url().'index.php/web/wisata' ?>" class="w3-bar-item w3-button">Wisata Rekreasi</a>
                    <a href="<?php echo base_url().'index.php/web/hotel' ?>" class="w3-bar-item w3-button">Hotel</a>
                </div>
                </div>
                <a href="<?php echo base_url().'index.php/web/login' ?>" class="w3-bar-item w3-button">Login</a>
                <a href="<?php echo base_url().'index.php/web/admin' ?>" class="w3-bar-item w3-button">Dashboard</a>
            </div>
            <div class="clear"></div>
        </header>