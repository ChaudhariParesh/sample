<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-6">
                <div class="card">
                  <form method="post" class="needs-validation"  name="update_profile" id="update_profile" novalidate="">
                    <div class="card-header">
                      <h4>Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>First Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="first_name" id="first_name" value="<?php if(!empty($single)){echo $single->first_name;}?>">
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name<span class="text-danger">*</span></</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="<?php if(!empty($single)){echo $single->last_name;}?>" >
                          </div>
						   <div class="form-group col-md-12 col-12">
                            <label>Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control" value="<?php if(!empty($single)){echo $single->company_name;}?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" class="form-control" value="<?php if(!empty($single)){echo $single->email;}?>">
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Mobile No</label>
                            <input type="text" name="mobile_no" id="mobile_no" class="form-control" value="<?php if(!empty($single)){echo $single->mobile_no;}?>">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Address</label>
                            <textarea  name="address" id="address"
							class="form-control summernote-simple"><?php if(!empty($single)){echo $single->address;}?></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group mb-0 col-12">
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button  type="submit"   value="upadate_profile" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
              </div>
			  
			  <div class="col-12 col-md-12 col-lg-5"> 
			  <div class="card">
                    <div class="card-header">
                      <h4>Change Password</h4>
                    </div>
                    <div class="card-body">
						<form method="post" id="password_form" id="password_form">
							<div class="row">
								<div class="form-group col-md-12 col-12">
									<label for="Password">Old Password<span class="text-danger">*</span></label>
									<input id="old_pass" type="password" class="form-control" name="old_pass" tabindex="1" >
									<div class="error" id="password_error"></div>
								</div>
								<div class="form-group col-md-12 col-12">
									<label for="Password"> New Password<span class="text-danger">*</span></label>
									<input id="new_pass" type="password" class="form-control" name="new_pass" tabindex="1" >
								</div>
								<div class="form-group col-md-12 col-12">
									<label for="Confirm Password">Confirm Password<span class="text-danger">*</span></label>
									<input id="conf_pass" type="password" class="form-control" name="conf_pass" tabindex="1" >
								</div>
							</div>
							<div class="card-footer text-right">
                      <button type="submit" id="check_password" name="check_password" class="btn btn-primary" value="check_password"> Change Password</button>
                    </div>
                    </div>
                   </form>
                </div>
			</div>
          </div>
		  </div>
        </section>
      </div>
      <?php include('footer.php');?>
	  <script>
	  $(document).ready(function(){
			
		$('#update_profile').validate({
					rules: {
						first_name:{required:true},
						last_name:{required:true},
						adress:{required:true},
						company_name:{required:true},
						mobile_no:{required:true,number:true,minlength:10,maxlength:12},
						email:{required:true,email:true},
					},
					message:{
						first_name:{required:"Please enter First Name"},
						last_name:{required:"Please enter  Last Name"},
						address:{required:"Please enter message"},
						company_name:{required:"Please enter company name"},
						mobile_no:{required:"Please enter mobile no",minlength:"Enter the valid the contact",maxlength:"Please enter the the valis contact number"},
						email:{required:"Enter the email id",email:"Please Enater validate email"},
					},
					submitHandler: function (form){
						form.submit();		
				}
		});
		$('#password_form').validate({
					rules: {
						old_pass:{required:true},
						new_pass:{required:true},
						conf_pass:{equalTo: "#new_pass"},
					},
					message:{
						new_pass:{required:"Please enter First Name"},
						old_pass:{required:"Please enter  New password"},
						conf_pass:{required:"Please enter correct Password"},
						
					},
					submitHandler: function (form){
						form.submit();
					}
		});
	  });
	  $("#old_pass").keyup(function(){
		  $.ajax({
				url : "<?=base_url()?>admin/ajax_controller/get_old_password",
				type: "POST",
				data : {'old_password':$("#old_pass").val()},
				success: function(data){
					 if(data == "0"){
						 $("#check_password").hide();
						 $("#password_error").html('Password is not matching');
					 }else{
						 $("#check_password").show();
						 $("#password_error").html('');
					 }
				},
				error: function (jqXHR, textStatus, errorThrown){
			 
				}
			});
	  });
	  </script>