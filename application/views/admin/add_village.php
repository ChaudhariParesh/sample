	<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Village</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?=base_url();?>">Forms</a></div>
              <div class="breadcrumb-item">Village Management</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                   <form method="post" id="form_village" name="form_village" enctype="multipart/form-data">
                     <div class="card-header" >
                      <h4>Add Village <button class="btn btn-primary pull-right" 	type="submit" id="view_village" value="" name=		"view_village"><a href="<?=base_url();?>list-village" >View List</a></button></h4>
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
								<?php if(!empty($district)){ foreach($district as $district_result){?>
										<option value="<?=$district_result->id?>" <?php if(!empty($single) && $single->district_id == $district_result->id){ ?>selected="selected"<?php }?>><?=$district_result->district?></option>
								<?php }}?>
							</select>
					</div>
					<div class="form-group">
						<label>Taluka ID<span class="text-danger">*</span></label>
							<select name="taluka_id" id="taluka_id">
								<option value="">Select Taluka</option>
								<?php if(!empty($taluka)){ foreach($taluka as $taluka_result){?>
										<option value="<?=$taluka_result->id?>" <?php if(!empty($single) && $single->taluka_id == $taluka_result->id){ ?>selected="selected"<?php }?>><?=$taluka_result->taluka?></option>
								<?php }}?>
							</select>
					</div>
                      <div class="form-group">
						 <input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
						<label> Add Village<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="village" id="village" value="<?php if(!empty($single)){echo $single->village;}?>">
							<div class="error" id="village_error"></div><br>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" id="check_village" value="check_village" name="check_village">Submit</button>
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
			$('#form_village').validate({
						rules: {
							village:{required:true},
						},
						messages:{
							village:{required:"Please enter Village"},
						},
						submitHandler: function (form){
							form.submit();		
					}
				});
			});
			$("#village").keyup(function(){
		  $.ajax({
				url : "<?=base_url()?>admin/ajax_controller/get_unique_village",
				type: "POST",
				data : {'village':$("#village").val()," id":'<?=$id?>'},
				success: function(data){
					 if(data == "0"){
						$("#check_village").show();
						 $("#district_error").html('');
					 }else{
						 $("#check_village").hide();
						  $("#village_error").html('This village  is  already exists, Plaese try another.');
					 }
				},
				error: function (jqXHR, textStatus, errorThrown){
				}
			});
	  });
	 </script>