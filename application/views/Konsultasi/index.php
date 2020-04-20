
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
            <a type="button" href="<?= base_url('lihat_konsultasi_controller'); ?>" class="btn" > lihat</a>
        </div>
    </div>
<?php } ?>
<br>
<div class="card text-left">
    <a type="button" href="<?= base_url('InputKonsultasiController'); ?>">Tanya!</a>
</div>

</table>
<br></bbr>
</div>
