<?php
if ($this->session->userdata('username') === null) :
  redirect(base_url());
endif; ?>


<html>
<div class="container bg-success">
  <div class="row justify-content-center mt-5">
    <div class="conatiner">
      <div class="row">
        <?php foreach ($admin as $adm) {
        ?>
          <h1 class="bg-primary  mx-auto col-mt-4"><br><?php echo "<b class='bg-danger'>" . $adm->username . '</b>' ?></br></h1>
        <?php } ?>
      </div>
    </div>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">gambar</th>
          <th scope="col">judul</th>
          <th scope="col">tanggal</th>
          <th scope="col">isi</th>
          <th scope="col"></th>


        </tr>
      </thead>
      <tbody>
        <?php foreach ($artikel as $key) {
        ?>
          <tr>
            <td><?= $key->judul; ?></td>
          </tr>
        <?php  } ?>
        <td><i class="fas fa-trash-alt text-danger"></i></td>
        <td><i class="fas fa-edit text-success" data-toggle="modal" data-target="#exampleModal" data-backdrop="static" data-keyboard="false"></i></td>

      </tbody>
    </table>`
  </div>
</div>

</html>