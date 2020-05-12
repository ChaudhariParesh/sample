<?php include('header.php')?>
<!-- <section>
<div class="product-banner" style="background-image: url(<?=base_url()?>images/corporate.jpg)">
	<div class="banner-head">
		<h2>Registration Form<h2>
	</div>
</div>
</section> -->
<section>
<div class="profile-c" >
	<div class="container">
		<div class="row">
			<div class="profile-now">
				<h3>Registration Form</h3>
			</div>
			<form class="form property-profile" method="post"  enctype="multipart/form-data">
				<div class="select-product-control">
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
						
						 <input type="hidden" id="id" name="id"  value="<?php if(!empty($single)){ echo $single->id; }?>">
							<label>STATE:</label>
							<select name="state" id="state">
							<option value="<?php if(!empty($single)){echo $single->state;}?>">Select State</option>
							<?php if(!empty($all_state)){
								foreach($all_state as $all_state_result){?>
								 <option value="<?=$all_state_result->id?>"><?=$all_state_result->state?></option>
							<?php }} ?>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>DISTRICT:</label>
							<select name="district" id="district">
							<option value="<?php if(!empty($single)){echo $single->district;}?>">Select district</option>
							<?php if(!empty($all_district)){
								foreach($all_district as $all_district_result){?>
								 <option value="<?=$all_district_result->id?>"><?=$all_district_result->district?></option>
							<?php }} ?>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group  property_radio sel-products-login">
							<label>CORPORATION:</label>
								<select id="corporation_type" name="corporation_type" >
									<option value="">Select</option>
									<option value="Yes" <?php if(!empty($single) && $single->corporation_type == "Yes" ){?> selected <?php } ?>>Yes</option>
									<option value="No" <?php if(!empty($single) && $single->corporation_type == "No" ){?> selected <?php } ?>>No</option>
								</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>TALUKA:</label>
							<select name="taluka" id="taluka">
							<option value="<?php if(!empty($single)){echo $single->taluka;}?>">Select Taluka</option>
							<?php if(!empty($all_taluka)){
								foreach($all_taluka as $all_taluka_result){?>
								 <option value=" <?=$all_taluka_result->id ?>"><?=$all_taluka_result->taluka?></option>
							<?php }} ?>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label> VILLAGE: </label>
							<select name="village" id="village">
							<option value="<?php if(!empty($single)){echo $single->village;}?>">Select Village</option>
							<?php if(!empty($all_village)){
								foreach($all_village as $all_village_result){?>
								 <option value="<?=$all_village_result->id?>"><?=$all_village_result->village?></option>
							<?php }} ?>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>COURT CASE: </label>
							<input type="text" name="court_casae" id="court_casae" placeholder="Enter Court Casae No" value="<?php if(!empty($single)){echo $single->state;}?>">
 						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>Objector: </label>
							<input type="text" name="objector" id="objector" placeholder="Enter Objector" value="<?php if(!empty($single)){echo $single->state;}?>">
 						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>SELECT SERVICES:</label>
							<select name="select_services" id="select_services">
								<option value="Search Request">Search Request</option>
								<option value="Watchdog Request">Watchdog Request</option>
								<option value="Detail Search request">Detail Search request</option>
								<option value="Draft Request">Draft Request</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>LOCAL BODY:</label>
							<select name="local_body" id="local_body">
								<option value="Municipal Corporation">Municipal Corporation</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label> CORPORATION CITY:</label>
							<select name="corporation_city" id="corporation_city">
								 <option value="aurangabad">Aurangabad</option>
							</select>
						</div>
						<div class="clearfix"></div>
					</div>
				
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>SURVEY/GUT NO: </label>
							<input type="text" name="survey_no" id="survey_no" placeholder="Enter Servey/GUT/CTS No" value="<?php if(!empty($single)){echo $single->survey_no;}?>">
 						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>SUB DIVISION/PART: </label>
							<input type="text" name="sub_division" id="sub_division" placeholder=" Servey/GUT/CTS No" value="<?php if(!empty($single)){echo $single->sub_division;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>BUILDING NAME: </label>
							<input type="text" name="bulding_name" id="bulding_name" placeholder="Enter Bullding No" value="<?php if(!empty($single)){echo $single->bulding_name;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>PLOT NO: </label>
							<input type="text"  name="plot_no" id="plot_no"placeholder="xx/123" value="<?php if(!empty($single)){echo $single->plot_no;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>LOCALITY:</label>
							<input type="text" name="locality" id="locality" placeholder="Enter Area" value="<?php if(!empty($single)){echo $single->locality;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					
					<div class="clearfix"></div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>FLAT/ROW HOUSE:</label>
							<input type="text" name="flat_type" id="flat_type" placeholder="xxx/123" value="<?php if(!empty($single)){echo $single->flat_type;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>DOCUMENT TYPE:</label>
							<input type="text" name="document_type" id="document_type" placeholder="Enter Document Type" value="<?php if(!empty($single)){echo $single->document_type;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>LITIGATION DETAILS:</label>
							<input type="text" name="litigation_type" id="litigation_type" placeholder="Enter Other Details" value="<?php if(!empty($single)){echo $single->litigation_type;}?>">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="property_group sel-products-login">
							<label>DOCUMENT COPY:</label>
							<input type="file" name="file_type" id="file_type" >
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="property-btn " >
						<button type="submit sb-prod" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>	
	</div>
</div>
</section>
<?php include('footer.php')?>