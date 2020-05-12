<?php include('header.php')?>
<section>
<div class="product-banner" style="background-image: url(<?=base_url()?>images/corporate.jpg)">
	<div class="banner-head">
		<h2>Contact Us<h2>
	</div>
</div>
</section>
<section>
	<div class="top-contact-us">
		<div class="container">
			<div class="row">
				<div class="qu_contact_us">
					<h2><span>G</span>et In Touch With Us !</h2>				
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 form-c">
					<div class="contact-details">
						<form class="center-block form-active clearfix" id="contact_form" name="contact_form" method="post">
						<div class="col-lg-6 control-group form-group">
							<div class="controls">
								<label>Full Name <span class="text-danger">*</span></label>
								<input type="text" placeholder="Full Name" class="form-control form_contact"
								id="contact_name" name="contact_name"
								value="<?php if(!empty($single)){echo $single->contact_name;}?>">
							</div>
						</div>
						<div class="col-lg-6 control-group form-group ">
							<div class="controls">
								<label>Contact Number <span class="text-danger">*</span></label>
							   <input type="text" placeholder="Phone Number" class="form-control form_contact" 
							   id="contact_mobile" name="contact_mobile"
							   value="<?php if(!empty($single)){echo $single->contact_mobile;}?>">
							</div>
						</div>
						<div class="col-lg-12 control-group form-group">
							 <div class="controls">
							   <label>Email Address <span class="text-danger">*</span></label>
							   <input type="email" placeholder="Email Address"  class="form-control form_contact" 
							   id="contact_email" name="contact_email" 
								value="<?php if(!empty($single)){echo $single->contact_email;}?>">
							</div>
						</div>
						<div class="col-lg-12 control-group form-group">
							 <div class="controls">
							 <label>Message <span class="text-danger">*</span></label>
							<textarea rows="4" cols="100" placeholder="Message" 
							class="form-control form_contact_text" id="message" 
							name="message" maxlength="999" style="resize:none" ><?php if(!empty($single)){echo $single->message;}?></textarea>
						 </div>
					  </div>
					 
					  <div class="col-lg-12 control-group form-group btn-sub">
						<button class="btn text-center qu_btn_submit_contact" type="submit"><span>Send Message</span></button>
					  </div>
					</form>
					
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-c">
					<div class="cont-info-control">
					
					<div class="r-control">
						<div class="list-cont">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="info-anchor">
							<a href="tel:+91-9158461461">+91-9158461461</a>	
						</div>
					</div>
					<div class="r-control">
						<div class="list-cont">
							<i class="fas fa-envelope"></i>
						</div>
						<div class="info-anchor">
							<a href="mailto:spytitles@gmail.com">offcialnutritionxpress@gmail.com</a>	
						</div>
					</div>
					<div class="r-control">
								<div class="list-cont">
									<i class="fas fa-map-marker-alt"></i>
								</div>
							<div class="info-address">
								<p>Shop No 8 Laxminvias Residency, <br>Opp Anuvrat Bhavan Near <br>Dr. C.G.ChaudhariHospital Maharashtra.
								<br>Jalgaon, Maharashtra 425001
								</p>
							</div>
						</div>
			</div>
		</div>
</section>
<section>	
	<div class="container">
			<div class="row">
	
	</div>
	</div>
	<div class="map-c">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d64966346.04739112!2d-8.880837691382165!3d-6.364132695908432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd90f77d326e613%3A0xa30a69d0c2c4fc19!2sNutrition%20Xpress!5e0!3m2!1sen!2sin!4v1587774298988!5m2!1sen!2sin" 
		width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>
</section>
<?php include('footer.php')?>

<script>
$(document).ready(function(){
			$('#contact_form').validate({
						rules: {
						contact_name:{required:true},
						message:{required:true},
						contact_mobile:{required:true,number:true,minlength:10,maxlength:12},
						contact_email:{required:true,email:true},
					},
					messages:{
						contact_name:{required:"Please enter name"},
						message:{required:"Please enter  message"},
						contact_mobile:{required:"Please enter mobile no",minlength:"Please enter minimum 10 digits",maxlength:"Please enter maximum 12 digits"},
						contact_email:{required:"Enter the email id",email:"Please Enater validate email"},
					},
					submitHandler: function (form){
						form.submit();		
					}
				});
			});
</script>