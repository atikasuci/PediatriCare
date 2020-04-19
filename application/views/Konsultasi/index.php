<!-- <br><br>
<h1> THIS IS KONSULTASI</h1>
<p>HAI <?= $user['username']; ?></p> -->
<style>

footer{
    background-color:#007B9B;
}
.card-footer{
    background-color:white;
}
.card{
    padding-left:160px;
    padding-right:160px;
    border:0px;
}
.btn{
    color:#fff;
    background-color:#007B9B;
}
a{
    color:#fff;
}

</style>

    <!-- <?php
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
    ?> -->

  <img class="card-img" src="<?php echo base_url(); ?>assets/images/konsul/bg.png">
  <div class="card-img-overlay">
  </div>
</div>

<br><br><br><br>
<div class="card text-left">
  <div class="card-header" >
   <b>Penyebab sakit perut saat bangun tidur</b>    <!-- judul -->
  </div>
  <div class="card-body">
    <h7 class="card-title">Penanya : SAEPUDIN</h7>
    <br>
    <!-- ini isi pertanyaan -->
    <p class="card-text">Dok , sakit perut atas bagian tengah setiap bangun tidur pagi hari nyeri sekali seperti tertekan rasanya, 
    namun hanya terjadi beberapa menit, namun rutin setiap pagi kenapa ya dok?</p>
  </div>
  <div class="card-footer">
  <a type="button" class="btn" style="color: white;"> lihat</a>
  </div>
</div>

<br><br>
<div class="card text-left ">
  <div class="card-header" >
   <b>Saya pernah duduk bersebelahan dengan ODP covid19, apakah saya harus isolasi diri?</b>    <!-- judul -->
  </div>
  <div class="card-body">
    <h7 class="card-title">Penanya : VIjay</h7>
    <br>
    <p class="card-text">sabtu siang kemarinsaya sempat bincang-bincang dengan teman-teman sekantor di ruangan tamu, 
    karena tidak ada satu pun diantara kami yang berstatus ODP sebelumnya, maka kami ngobrol seperti biasa saja. 
    baru kemudian pada hari minggu siang, salah satu rekan kami yang ikut nimbrung itu berstatus ODP karena pernah berinteraksi 
    dengan pasien covid19 lima hari sebelumnya yang juga baru dinyatakan positif pada minggu siang itu. 
    apa yang harus saya lakukan untuk upaya penanggulangan covid dengan kondisi resiko yang saya alami ini dok? untuk informasi tambahan,
     teman saya itu tidak ada gejala apapun, batuk pilek atau sakit tenggorokan, kami juga tidak berjabat tangan hanya berbincang seperti biasa, 
     jarak duduk kami pun sekitar 60 meter.terimakasih dok atas perhatiannya...wassalamualaikum wr wb.</p>
  </div>
  <div class="card-footer">
  <a type="button" class="btn" style="color: white;"> lihat</a>
  <a type="button" href="<?= base_url('input_konsultasi_controller'); ?>">Sign Up</a>
  </div>
</div>

</table>
<br></bbr>
</div>


<br>
<br>
<br>
<footer>.</footer>
