	<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Property Management</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="<?=base_url();?>"></a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header ">
                    <h4>Property Table</h4>					
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>STATE:</th>
                          <th>DISTRICT </th>
                          <th>CORPORATION: </th>
                          <th>TALUKA </th>
                          <th>VILLAGE </th>
                          <th>COURT CASE:</th>
                          <th>Objector:</th>
                          <th>SELECT SERVICES:</th>
                          <th>LOCAL BODY:</th>
                          <th>CORPORATION CITY:</th>
                          <th>SURVEY/GUT NO:</th>
                          <th>SUB DIVISION/PART:</th>
                          <th>BUILDING NAME:</th>
                          <th>PLOT NO:</th>
                          <th>LOCALITY:</th>
                          <th>FLAT/ROW HOUSE:</th>
                          <th>DOCUMENT TYPE:</th>
                          <th>LITIGATION DETAILS</th>
                          <th>Action </th>
                         
                        </tr>
                        <tr>
                         <?php
                            if(!empty($catagory)){
                              $i=1;
                                foreach ($catagory as $category_result ) {
                                  ?>
                                  <td><?=$i++?></td>
                                  <td><?=$category_result->state?></td>
                                  <td><?=$category_result->district?></td>
                                  <td><?=$category_result->corporation_type?></td>
                                  <td><?=$category_result->taluka?></td>
                                  <td><?=$category_result->village?></td>
                                  <td><?=$category_result->court_casae?></td>
                                  <td><?=$category_result->objector?></td>
                                  <td><?=$category_result->select_services?></td>
                                  <td><?=$category_result->local_body?></td>
                                  <td><?=$category_result->corporation_city?></td>
                                  <td><?=$category_result->survey_no?></td>
                                  <td><?=$category_result->sub_division?></td>
                                  <td><?=$category_result->bulding_name?></td>
                                  <td><?=$category_result->plot_no?></td>
                                  <td><?=$category_result->locality?></td>
                                  <td><?=$category_result->flat_type?></td>
                                  <td><?=$category_result->document_type?></td>
                                  <td><?=$category_result->litigation_type?></td>
                                 <td>
								  <a href="<?=base_url();?>add_property/<?=$category_result->id?>" class="btn btn-secondary">Edit</a>
                                    <a href="<?=base_url();?>delete/tbl_add_property/<?=$category_result->id?>" class="btn btn-secondary">Delete</a>
                                       <?php if($category_result->status == "1"){?>
                                      <a onclick="return confirm('Are you sure to inactive this record?');" href="<?=base_url();?>inactive/tbl_add_property/<?=$category_result->id?>" class="btn btn-primary" id="btnset">In Active</a>
                                      <?php } else {?>
                                      <a onclick="return confirm('Are you sure to active this record?');" href="<?=base_url();?>active/tbl_add_property/<?=$category_result->id?>" class="btn btn-primary " 
                                        id="btnset">Active</a>
                                  <?php }?>
                                  </td>
                        </tr> 
								<?php }         
                            }
                          ?>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script> 
      </script>
     <?php include('footer.php');?>