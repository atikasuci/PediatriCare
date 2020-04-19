<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/konsultasi.css" type="text/css" />

</head>

<img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">

<br><br><br><br>
<?php foreach ($konsultasi as $k) { ?>
<div class="card text-left">
    <div class="card-header">
        <b><?= $k['judul'] ?></b> <!-- judul -->
    </div>
    <div class="card-body">
        <h7 class="card-title"><b>Penanya : <?= $k['username'] ?></b></h7>
        <br>
        <!-- ini isi pertanyaan -->
        <p class="card-text"><?= $k['question'] ?></p>
    </div>
    <div class="card-footer">
        <a type="button" class="btn" style="color: white;"> lihat</a>
        <a type="button" href="<?= base_url('InputKonsultasiController '); ?>">Sign Up</a>
    </div>
</div>
<?php } ?>

</table>
<br></bbr>
</div>


<br>
<br>
<br>
<footer>.</footer>
