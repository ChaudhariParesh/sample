<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>District</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?=base_url();?>">Forms</a></div>
              <div class="breadcrumb-item">District</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                   <form method="post" id="form_district" name="form_district" enctype="multipart/form-data">
                      
					<div class="card-header" >
						<h4>Add District <button class="btn btn-primary pull-right" type="submit" id="view_state" value="" name="view_state"><a href="<?=base_url();?>list-district" >View List</a></button></h4>
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
								 <input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
								<label> Add District<span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="district" id="district" value="<?php if(!empty($single)){ echo $single->district;}?>">
									<div class="error" id="district_error"></div><br>
							  </div>
						</div>
						<div class="card-footer text-right">
						  <button class="btn btn-primary" type="submit" id="check_district" value="check_district" name="check_district">Submit</button>
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
			$('#form_district').validate({
						rules: {
							district:{required:true},
						},
						messages:{
							district:{required:"Please enter District"},
						},
						submitHandler: function (form){
							form.submit();		
					}
				});
			});
	$("#district").keyup(function(){
		  $.ajax({
				url : "<?=base_url()?>admin/ajax_controller/get_unique_district",
				type: "POST",
				data : {'district':$("#district").val()," id":'<?=$id?>'},
				success: function(data){
					 if(data == "0"){
						$("#check_district").show();
						 $("#district_error").html('');
					 }else{
						 $("#check_district").hide();
						  $("#district_error").html('This district  is  already exists, Plaese try another.');
					 }
				},
				error: function (jqXHR, textStatus, errorThrown){
				}
			});
	  });
	 </script>