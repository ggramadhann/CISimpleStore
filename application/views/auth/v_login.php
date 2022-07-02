<div class="login-box mx-auto mt-5">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</a>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <form action="<?=base_url()?>Login/proses" method="POST">
        <div class="input-group mb-3 mt-3">
          <input type="username" class="form-control" placeholder="Username" required name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 mt-2">
          <input type="password" class="form-control" placeholder="Password" required name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block mt-3">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <div class="alert alert-light mt-4 text-muted" role="alert">
        <div class="row mx-auto">
            <div class="userTxt">

                <p>Demo User :<br>
                username = user<br>
                password = user
                </p>
            </div>
            <div class="userAdm ml-4">

                <p>Demo Admin :<br>
                username = admin<br>
                password = admin
                </p>
            </div>
        </div>
    </div>
      <p class="mb-0 mt-2">
        <h8>Belum punya akun?</h8>
        <a href="#" class="text-center">Register disini</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->