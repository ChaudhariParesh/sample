	<?php include('header.php');?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> 
			Village Management</h1>
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
                    <h4>Village Table</h4>					
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>State Name</th>
                          <th>District Name</th>
                          <th>Taluka Name</th>
                          <th>village Name</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                         <?php
                            if(!empty($village)){
                              $i=1;
                                foreach ($village as $category_result ) {
                                  ?>
                                  <td><?=$i++?></td>
								  
                                  <td><?=$category_result->state?></td>
                                  <td><?=$category_result->district?></td>
                                   <td><?=$category_result->taluka?></td>
                                  <td><?=$category_result->village?></td>
                                  <td><a href="<?=base_url();?>add-village/<?=$category_result->id?>" class="btn btn-secondary">Edit</a>
                                    <a href="<?=base_url();?>delete/tbl_village/<?=$category_result->id?>" class="btn btn-secondary">Delete</a>
                                       <?php if($category_result->status == "1"){?>
                                      <a onclick="return confirm('Are you sure to inactive this record?');" href="<?=base_url();?>inactive/tbl_village/<?=$category_result->id?>" class="btn btn-primary " id="btnset">In Active</a>
                                      <?php } else {?>
                                      <a onclick="return confirm('Are you sure to active this record?');" href="<?=base_url();?>active/tbl_village/<?=$category_result->id?>" class="btn btn-primary " 
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