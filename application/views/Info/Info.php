<?php $data = $info_detail;  ?>
<div class="container">
    <div class="row">
        <div class="media position-relative">
            <div>
                <img src="<?= base_url() ?>assets/images/info/<?= $data['photo'] ?>" />
            </div>
            <div class="media-body">
                <h5 class="mt-0"><?= $data['judul'] ?></h5>
                <p><?= $data['isi'] ?></p>
            </div>
        </div>
    </div>
</div>