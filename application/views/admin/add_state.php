	<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>State</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?=base_url();?>">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?=base_url();?>">Forms</a></div>
              <div class="breadcrumb-item">Add Blog</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                   <form method="post" id="form_state" name="form_state" enctype="multipart/form-data">
                      <div class="card-header" >
                      <h4>Add State <button class="btn btn-primary pull-right" type="submit" id="view_state" value="" name="view_state"><a href="<?=base_url();?>list-state" >View List</a></button>
                 </h4>    
                    </div>
                    <div class="card-body">
                      <div class="form-group">
						 <input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
						<label> Add State<span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="state" id="state" value="<?php if(!empty($single)){echo $single->state;}?>">
							<div class="error" id="state_error"></div><br>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" id="check_state" value="check_state" name="check_state">Submit</button>
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
			$('#form_state').validate({
						rules: {
							state:{required:true},
						},
						messages:{
							state:{required:"Please enter State"},
						},
						submitHandler: function (form){
							form.submit();		
					}
				});
			});
			$("#state").keyup(function(){
		  $.ajax({
				url : "<?=base_url()?>admin/ajax_controller/get_unique_state",
				type: "POST",
				data : {'state':$("#state").val()," id":'<?=$id?>'},
				success: function(data){
					 if(data == "0"){
						$("#check_state").show();
						 $("#state_error").html('');
					 }else{
						 $("#check_state").hide();
						  $("#state_error").html('This state  is  already exists, Plaese try another.');
					 }
				},
				error: function (jqXHR, textStatus, errorThrown){
				}
			});
	  });
	 </script>