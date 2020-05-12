	<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Taluka</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?=base_url();?>">Forms</a></div>
              <div class="breadcrumb-item"> Taluka Management</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                   <form method="post" id="form_taluka" name="form_taluka" enctype="multipart/form-data">
				  <div class="card-header" >
                      <h4>Add Taluka <button class="btn btn-primary pull-right" 	type="submit" id="view_state" value="" name=		"view_state"><a href="<?=base_url();?>list-taluka" >View List</a></button></h4>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>State ID<span class="text-danger">*</span></label>
						<select name="state_id" id="state_id">
										<option value="">Select State</option>
										<?php if(!empty($state)){ foreach($state as $state_result){?>
										<option value="<?=$state_result->id?>" <?php if(!empty($single) && $single->state_id == $state_result->id){ ?>selected="selected"<?php }?>><?=$state_result->state?></option>
										<?php }}?>
						</select>
					</div>
					<div class="form-group">
						<label>District ID<span class="text-danger">*</span></label>
							<select name="district_id" id="district_id">
								<option value="">Select District </option>
								<?php if(!empty($district)){ foreach($district as $state_result){?>
										<option value="<?=$state_result->id?>" <?php if(!empty($single) && $single->district_id == $state_result->id){ ?>selected="selected"<?php }?>><?=$state_result->district?></option>
								<?php }}?>
							</select>
					</div>
                      <div class="form-group">
						 <input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
						<label> Add Taluka<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="taluka" id="taluka" value="<?php if(!empty($single)){echo $single->taluka;}?>">
							 <div class="error" id="taluka_error"></div><br>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" id="check_taluka" value="check_taluka" name="check_taluka">Submit</button>
                    </div>
                  </form>
                </div> 
            </div>
          </div>
        </section>
      </div>
     <?php include('footer.php');
	 $id="";
	 if($this->uri->segment(2) !=""){
		$id=$this->uri->segment(2); 
	 }
	 ?>
	 <script>
	 $(document).ready(function(){
			$('#form_taluka').validate({
						rules: {
							taluka:{required:true},
						},
						messages:{
							taluka:{required:"Please enter Taluka"},
						},
						submitHandler: function (form){
							form.submit();		
					}
				});
			});
			$("#taluka").keyup(function(){
		  $.ajax({
				url : "<?=base_url()?>admin/ajax_controller/get_unique_taluka",
				type: "POST",
				data : {'taluka':$("#taluka").val()," id":'<?=$id?>'},
				success: function(data){
					 if(data == "0"){
						$("#check_taluka").show();
						 $("#district_error").html('');
					 }else{
						 $("#check_taluka").hide();
						  $("#taluka_error").html('This taluka  is  already exists, Plaese try another.');
					 }
				},
				error: function (jqXHR, textStatus, errorThrown){
				}
			});
	  });
	 
	 </script>