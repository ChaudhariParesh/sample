<?php 
if(empty($exist)){
	$this->session->set_flashdata('message','Invalid link!');
	redirect('login');
}
?>
<?php include('header.php');?>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand"></div>
            <div class="card card-primary">
              <div class="card-header"><h4>Reset Password</h4></div>
              <div class="card-body">
                <form method="post"    name="forgot_link" id="forgot_link">
                  <div class="form-group">
                    <label for="email">New Password</label>
                    <input id="new_pass" type="password" class="form-control" name="new_pass" tabindex="1">
                  </div>
				  <div class="form-group">
                    <label for="email">Confirm Password</label>
                    <input id="confm_pass" type="password" class="form-control" name="confm_pass" tabindex="1" >
					<input type="hidden" name="token" id="token" value="<?=$exist->reset_password?>">
                  </div>
                  <div class="form-group">
                    <button type="submit"  class="btn btn-primary btn-lg btn-block" tabindex="4">
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
 
  <?php include('footer.php');?>
  <script>
  $(document).ready(function(){
  $('#forgot_link').validate({
					rules: {
						new_pass:{required:true},
						confm_pass:{equalTo: "#new_pass" },
					},
					message:{
						new_pass:{required:"Please enter Password"},
						confm_pass:{required:"Please enter  Password"},
					},
					submitHandler: function (form){
						form.submit();		
				}
		});
	  });
</script>