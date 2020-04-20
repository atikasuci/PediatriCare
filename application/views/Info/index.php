<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css">  -->
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h2 class="display-4">Anda Ingin Konsultasi Seputar Anak ?</h2>
            <p class="lead">Tanyakan kepada kami secara mudah dan cepat</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">klik disini</a>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Info Seputar Kesehatan</h3>
            </div>
        </div>
        <br></br>
        <?php foreach ($info as $i) { ?>
            <div class="media position-relative">
                <img src="assets/images/info/<?= $i['photo'] ?>" class="mr-3" alt="..." style="width:30%;">
                <div class="media-body">
                    <h5 class="mt-0"><?= $i['judul'] ?></h5>
                    <p><?= $i['isi'] ?></p>
                    <a href="<?= base_url('InfoController/view/') . $i['id_info'] ?>" class="stretched-link">klik disini</a>
                    <!-- <a class="btn btn-primary btn-sm" href="<?= base_url('InfoController/UpdateInfo/') . $i['id_info'] ?>" role="button">Update</a> -->
                    <a type="button" class="btn btn-danger btn-sm" href="<?php echo base_url() . 'InfoController/DeleteInfo/' . $i['id_info'] ?>" onClick="return confirm('Apakah Anda Yakin?')">Delete</a></td>
                    <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#UpdateInfo"> Update.</a>
                </div>
            </div>
            <br>
        <?php } ?>

        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddInfo"> Create.</a>
    </div>
    <!-- <button class="btn btn-primary btn-sm" type="submit">tambah</button> -->
    <div>

</body>

<div class="modal fade" id="AddInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h2>TAMBAH INFO</h2>
                </center>
            </div>
            <div class="modal-body">
                <!-- isi form ini -->
                <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>

                <?php echo form_open("InfoController/Save", array('enctype' => 'multipart/form-data')); ?>
                <table cellpadding="8">
                    <tr>
                        <td>judul</td>
                        <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>isi</td>
                        <td><input type="text" name="input_isi" value="<?php echo set_value('input_isi'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="input_gambar" required></td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="UpdateInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h2>UPDATE INFO</h2>
                </center>
            </div>
            <div class="modal-body">
                <!-- isi form ini -->
                <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>

                <?php echo form_open('InfoController/UpdateInfo/', array('enctype' => 'multipart/form-data')); ?>
                <table cellpadding="8">
                    <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="id_info" name="id_info" value="<?php echo $i['id_info'] ?>" required>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Judul</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul" value="<?php echo $i['judul'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Isi</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Isi" name="isi" value="<?php echo $i['isi'] ?>" required>
                    </div>
                    <td>Gambar</td>
                    <td><input type="file" name="input_gambar" required></td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
