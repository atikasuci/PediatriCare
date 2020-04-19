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
        <?php foreach ($rumahsakit as $rs) { ?>
            <div class="row">
                <div class="media position-relative">
                    <div class="media-body">
                        <i class="fa fa-hospital-o" style="font-size: 12px"></i>
                        <h5 class="mt-0"><?= $rs['nama'] ?></h5>
                        <p><?= $rs['alamat'] ?></p>
                        <p><?= $rs['notelp'] ?></p>
                    </div>
                </div>
            </div>
            <br>
        <?php } ?>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH </button>

        <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>TAMBAH DATA RUMAH SAKIT</h2>
                        </center>
                    </div>
                    <div class="modal-body">
                        <!-- isi form ini -->
                        <form method="POST" action="<?= base_url() ?>RumahSakitController/addRs">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Rumah Sakit</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Rumah Sakit" name="nama" required>
                            </div>

                            <div class="form-group">
                                <label for="formGroupExampleInput">Alamat</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label>No Telp</label><br>
                                <input type="text" class="form-control" name="notelp">
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
