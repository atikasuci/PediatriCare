<!-- <br><br>
<h1> THIS IS KONSULTASI</h1>
<p>HAI <?= $user['username']; ?></p> -->
<h2>Konsultasi</h2><br>


<table border="1" cellpadding="8">
    <tr>
        <th>Judul</th>
        <th>username</th>
        <th>dokter</th>
        <th>question</th>
        <th>answer</th>
    </tr>

    <?php
    if (!empty($konsultasi)) {
        foreach ($konsultasi as $data) {
            echo "<tr>";
            // echo "<td><img src='" . base_url("upload/info/" . $data->photo) . "' width='100' height='100'></td>";
            echo "<td>" . $data->judul . "</td>";
            echo "<td>" . $data->username . "</td>";
            echo "<td>" . $data->dokter . "</td>";
            echo "<td>" . $data->question . "</td>";
            echo "<td>" . $data->answer . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
    ?>
</table>
<br></bbr>
</div>

<div class="modal fade" id="AddKonsultasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h2>TAMBAH KONSULTASI</h2>
                </center>
            </div>
            <div class="modal-body">
                <!-- isi form ini -->
                <div style="color: red;"><?php echo (isset($message)) ? $message : ""; ?></div>

                <?php echo form_open("KonsultasiController/Save", array('enctype' => 'multipart/form-data')); ?>
                <table cellpadding="8">
                    <tr>
                        <td>judul</td>
                        <td><input type="text" name="input_judul" value="<?php echo set_value('input_judul'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="input_isi" value="<?php echo set_value('input_username'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>dokter</td>
                        <td><input type="text" name="input_isi" value="<?php echo set_value('input_dokter'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>question</td>
                        <td><input type="text" name="input_isi" value="<?php echo set_value('input_question'); ?>" required></td>
                    </tr>
                    <tr>
                        <td>answer</td>
                        <td><input type="text" name="input_isi" value="<?php echo set_value('input_answer'); ?>" required></td>
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

<!-- 
<h2>KONSULTASI</h2><br>
<div class="media position-relative">
    <img src="assets/info/covid19.jpg" class="mr-3">
    <a class="media-body">
        <h5 class="mt-3">Covid-19</h5>
        <p>Covid-19 adalah penyakit yang ditimbulkan oleh infeksi virus corona baru atau SARS-CoV-2 yang berasal dari keluarga corona.
            Namun, jenis virus yang menyebar kali ini belum pernah ada sebelumnya.</p>
    </a>
    </!-->
<a href="<?= base_url('Konsultasi/index'); ?>" class="stretched-link">Klik here to know...</a><br>
<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddKonsultasi"> Create.</a></div>
<!-- <a class="small" href="<?= base_url('KonsultasiController/AddKonsultasi'); ?>">Create</a> -->
</div>
