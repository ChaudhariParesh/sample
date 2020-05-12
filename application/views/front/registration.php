<?php include('header.php')?>
<!-- <section>
<div class="product-banner" style="background-image: url(<?=base_url()?>images/corporate.jpg)">
	<div class="banner-head">
		<h2>Registration Form<h2>
	</div>
</div>
</section> -->
<section>
<div class="register-c" style="background-image:url(<?=base_url()?>images/banner4.jpg)">
	<div class="container">
		<div class="row">
			<div class="register-Now">
				<h3>Contact Form</h3>
			</div>
			<form class="form form-reg" method="post" id="registration_form" name="registration_form">
					<div class="select-product-control">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group sel-products-login">
							<input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
								<label>First Name<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name"  value="<?php if(!empty($single)){echo $single->first_name;}?>">	
							</div>
					</div>
				</div>
					<div class="select-product-control">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group sel-products-login">
								<label>Last Name<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name"  value="<?php if(!empty($single)){echo $single->last_name;}?>">
						</div>
					</div>
				</div>
				<div class="select-product-control">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group sel-products-login">
								<label>Email Address<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="user_email"  name="user_email" placeholder="Enter Email"  value="<?php if(!empty($single)){echo $single->user_email;}?>">
						</div>
					</div>
				</div>
					<div class="select-product-control">	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group sel-products-login">	
							<label>Mobile No.<span class="text-danger">*</span></label>
							 <input type="text" class="form-control" id="phone_number" name="phone_number"  value="<?php if(!empty($single)){echo $single->phone_number;}?>">
						</div>
					</div>
 				</div>
		 		<div class="login-btn">
		 		 	<button type="submit sb-prod" class="btn btn-default">Submit</button>
				</div>
			</form>	
		</div>
	</div>
</div>
</section>
<?php include('footer.php')?>
<script>
$(document).ready(function(){
			$('#registration_form').validate({
						rules: {
						first_name:{required:true},
						last_name:{required:true},
						phone_number:{required:true,number:true,minlength:10,maxlength:12},
						user_email:{required:true,email:true},
					},
					messages:{
						first_name:{required:"Please enter first name"},
						last_name:{required:"Please enter  last name"},
						phone_number:{required:"Please enter mobile no",minlength:"Please enter minimum 10 digits",maxlength:"Please enter maximum 12 digits"},
						user_email:{required:"Enter the email id",email:"Please Enater validate email"},
					},
					submitHandler: function (form){
						form.submit();		
					}
				});
			});
</script>