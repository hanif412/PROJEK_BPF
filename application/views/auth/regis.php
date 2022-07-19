<body>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Welcome to Good Gaming Shop</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="img" style="background-image: url(<?= base_url('assets/') ?>login_form/images/pro_player.jpg);">
            </div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                  </p>
                </div>
              </div>
              <?= $this->session->flashdata('message'); ?>
              <form class="user" class="signin-form" method="post" action="<?= base_url('Auth/registrasi'); ?>">
                <div class="form-group mb-3">
                  <label class="label" for="nama">Nama</label>
                  <input type="text" value="<?= set_value('nama'); ?>" name="nama" class="form-control" placeholder="Email" required>
                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="email">Email</label>
                  <input type="email" value="<?= set_value('email'); ?>" name="email" class="form-control" placeholder="Email" required>
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" value="<?= set_value('password1'); ?>" name="password1" class="form-control" placeholder="Password" required>
                  <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Ulangi Password</label>
                  <input type="password" value="<?= set_value('password2'); ?>" name="password2" class="form-control" placeholder="Password" required>
                  <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up Account</button>
                </div>
              </form>
              <p class="text-center">Have a account? <a href="<?= base_url('Auth') ?>">Sign In</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>