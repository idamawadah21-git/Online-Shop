<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" >
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/panel.css" >
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
            <nav>
                <ul>
                    <li><a href="<?= base_url().'index.php/web' ?>">Home</a></li>
                    <li><a href="<?= base_url().'index.php/web/' ?>">Gallery</a></li>
                    <li><a href="<?= base_url().'index.php/web/' ?>">Buku Tamu</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>