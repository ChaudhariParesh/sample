<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Forgot Password &mdash; </title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand"></div>
            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password</h4></div>
              <div class="card-body">
                <form method="post" name="forgot_link">
                  <div class="form-group">
                    <label for="email">Password</label>
                    <input id="new_pass" type="text" class="form-control" name="new_pass" tabindex="1">
                  </div>
				  <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <input id="email" type="text" class="form-control" name="confm_pass" tabindex="1" >
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Set Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy;2018
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
    <script href="<?=base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script href="<?=base_url();?>assets/js/popper.min.js"></script>
    <script href="<?=base_url();?>assets/js/bootstrap.min.js"></script>
    <script href="<?=base_url();?>assets/js/jquery.nicescroll.min.js"></script>
    <script href="<?=base_url();?>assets/js/moment.min.js"></script>

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

</body>
</html>
