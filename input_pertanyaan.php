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
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pertanyaan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
 <left><button type="submit" class="btn btn-primary" >Submit</button></left>
</form>
</div>


<br>
<br>
<br>
<footer>.</footer>