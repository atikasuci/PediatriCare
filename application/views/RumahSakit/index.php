<html lang="en">   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/login.css">  -->   
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
            <div class="media position-relative">
                <img src="assets/images/rs/icon.png" class="mr-3" alt="..." width="200" height="150">
                <div class="media-body">
                    <h5 class="mt-0">RS Muhammadiyah Bandung</h5>
                    <p>
                    Jl. K.H. Ahmad Dahlan No 53, Turangga,<br>
                    Kec. Lengkong, Kota Bandung, Jawa Barat 40264 <br>
                    (022) 7301062
                    </p>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="media position-relative">
                <img src="assets/images/rs/icon.png" class="mr-3" alt="..." width="200" height="150">
                <div class="media-body">
                    <h5 class="mt-0">RS Hasan Sadikin Bandung</h5>
                    <p> Jl. Pasteur No. 38 Bandung,<br>
                    Kel. Pasteur Kec. Sukajadi 40161,<br>
                    (022)2032216</p>
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">TAMBAH </button>

        <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <center><h2>TAMBAH DATA RUMAH SAKIT</h2></center>
            </div>
            <div class="modal-body">
            <!-- isi form ini -->
            <form method="POST" action="">
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama Rumah Sakit</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nama Rumah Sakit" name="" required >
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Alamat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Alamat" name=""required>
                </div>

                <div class="form-group">
					<label>Foto</label><br>
					<input type="file" class="form-control" name="foto">
				</div>	

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
            </form>
            </div>
            </div>
        </div>
        </div>
    </div>

</body>



