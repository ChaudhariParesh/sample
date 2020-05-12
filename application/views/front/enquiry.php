<?php include('header.php')?>
<!-- <section>
<div class="product-banner" style="background-image: url(<?=base_url()?>images/corporate.jpg)">
	<div class="banner-head">
		<h2>Registration Form<h2>
	</div>
</div>
</section> -->
<section>
<div class="register-c" style="background-image:url(<?=base_url()?>images/nx_enquiry.jpg)">
	<div class="container">
		<div class="row">
			<div class="register-Now">
				<h3>Enquiry Form</h3>
			</div>
			<form class="form form-reg" method="post" id="enquiry_form" name="enquiry_form">
			<div class="form-group">
							<input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
								<label for="exampleInputtext1">Name<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Your Name" value="<?php if(!empty($single)){echo $single->first_name;}?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email<span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Enter Your Email" value="<?php if(!empty($single)){echo $single->contact_email;}?>">
							</div>
							<div class="form-group">
								<label>Phone No.</label>
								<input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Enter Your Phone number" value="<?php if(!empty($single)){echo $single->contact_phone;}?>" >
							</div>
							<div class="form-group">
								<label for="exampleInputtext1">Your Message<span class="text-danger">*</span></label><br>
									<textarea class="text-contact" id="message" placeholder="Enter Your Message" name="message"><?php if(!empty($single)){echo $single->message;}?></textarea>
							</div>
							<div class="form-group btn-c">
							   <button type="submit">Send</button>
							</div>
			</form>	
		</div>
	</div>
</div>
</section>
<?php include('footer.php')?>
<script>
$(document).ready(function(){
			$('#enquiry_form').validate({
						rules: {
						first_name:{required:true},
						message:{required:true},
						contact_phone:{number:true,minlength:10,maxlength:12},
						contact_email:{required:true,email:true},
						
					},
					messages:{
						first_name:{required:"Please enter name"},
						message:{required:"Please enter  message"},
						contact_phone:{minlength:"Please enter minimum 10 digits",maxlength:"Please enter maximum 12 digits"},
						contact_email:{required:"Enter the email id",email:"Please Enater validate email"},
					},
					submitHandler: function (form){
						form.submit();		
					}
				});
			});
</script>