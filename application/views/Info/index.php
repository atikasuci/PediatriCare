<!-- <br><br>
<h1> THIS IS INFO</h1>
<p>Kosong, cuman ada <?= $user['username']; ?></p> -->
<h2>Info</h2><br>


<table border="1" cellpadding="8">
    <tr>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Photo</th>
    </tr>

    <?php
    if (!empty($info)) {
        foreach ($info as $data) {
            echo "<tr>";
            echo "<td><img src='" . base_url("upload/info/" . $data->photo) . "' width='100' height='100'></td>";
            echo "<td>" . $data->judul . "</td>";
            echo "<td>" . $data->isi . "</td>";
            echo "<td>" . $data->photo . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
    ?>
</table>
<br></bbr>

<!-- <a href="<?= base_url('Info/info'); ?>" class="stretched-link">Klik here to know...</a><br> -->
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddInfo"> Create.</a></div>
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#UpdateInfo"> Update.</a></div>
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#DeleteInfo"> Delete.</a></div>

<!-- <a class="small" href="<?= base_url('InfoController/AddInfo'); ?>">Create</a> -->
</div>

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

<div class="modal fade" id="AddInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h2>UPDATE INFO </h2>
                </center>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url() . 'InfoController/UpdateInfo'; ?>">
                    <div class="form-group">
                        <label for="nama">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $info['judul']; ?>">
                        <small class="form-text text-danger"><?= form_error('judul') ?>.</small>
                    </div>
                    <div class="form-group">
                        <label for="nim">isi</label>
                        <input type="text" class="form-control" id="isi" name="isi" value="<?= $info['isi']; ?>">
                        <small class="form-text text-danger"><?= form_error('isi') ?>.</small>
                    </div>
                    <div class="form-group">
                        <label for="text">photo</label>
                        <input type="text" class="form-control" id="photo" name="photo" value="<?= $info['photo']; ?>">
                        <small class="form-text text-danger"><?= form_error('photo') ?>.</small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                </form>
            </div>
        </div>

    </div>
</div>
</div>

<div class="modal fade" id="DeleteInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h2>DELETE INFO </h2>
                </center>
            </div>
            <div class="modal-body">
                <!-- isi form ini IHH ALAH DE AH WKWK asli random bat-->
                <form method="POST" action="<?php echo base_url() . 'InfoController/DeleteInfo'; ?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">ID yang ingin di hapus</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Id" name="id_info" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="formGroupExampleInput">Isi</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Isi" name="isi" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Photo</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Photo" name="photo" required>
                    </div> -->
            </div>
            <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
            <script>
                $('.custom-file-input').on('change', function() {
                    let fileName = $(this).val().split('\\').pop();
                    $(this).next('.custom-file-label').addClass("selected").html(fileName);
                });
            </script>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>
