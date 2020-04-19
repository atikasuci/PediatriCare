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
  <br><br><br>

<div class="card">
<form>
    <h4><b>Form Jawab</b></h4><br>
  <div class="form-group">
    <h4><b>Saya pernah duduk bersebelahan dengan ODP covid19, apakah saya harus isolasi diri?</b></h4>
    <p>penanya : SAEPUDIN</p>
    <p class="card-text">sabtu siang kemarinsaya sempat bincang-bincang dengan teman-teman sekantor di ruangan tamu, 
    apa yang harus saya lakukan untuk upaya penanggulangan covid dengan kondisi resiko yang saya alami ini dok? untuk informasi tambahan,
     teman saya itu tidak ada gejala apapun, batuk pilek atau sakit tenggorokan, kami juga tidak berjabat tangan hanya berbincang seperti biasa, 
     jarak duduk kami pun sekitar 60 meter.terimakasih dok atas perhatiannya...wassalamualaikum wr wb.</p>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Jawaban:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
 <right><button type="submit" class="btn btn-primary" >Submit</button></right>
</form>
</div>


<br>
<br>
<br>
<footer>.</footer>