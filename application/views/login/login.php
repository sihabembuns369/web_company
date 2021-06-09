<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="container-md">
    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">halaman login</div>
          <div class="card-body mt-2">
            <?= form_open('index.php/login/proseslogin_admin'); ?>

            <div class="form-group">
              <label for="">username</label>
              <input type="text" name="username" class="mt-3 col-md-9" placeholder="masukan username anda" required>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="mt-4 col-md-9" name="password" placeholder="masukan password anda" required>
            </div>
            <button type="submit" class="btn btn-success col-md-12 mt-3">Login</button>
            <?= form_close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>