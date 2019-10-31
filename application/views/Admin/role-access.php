    
        <!-- page content -->
        <div class="right_col" role="main">
		   <div class="row">
			   <div class="col-md-6 col-sm-6 col-xs-12">
				   <div class="x_panel">
                  <div class="x_title">
			   <h4 class="text-center">Role : <?= $role['role']; ?></h4>
			   <div class="container">
				<hr>
				</div>
                    <h2>Data Menu Role</h2>  	
                    
                    <div class="clearfix"></div>
			   </div>

			  <?= $this->session->flashdata('message'); ?>
                  <div class="x_content">
				   
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Menu</th>
                          <th class="">Aceess</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $i = 1; ?>
					  <?php foreach ($menu as $m) : ?>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $m['menu']; ?></td>
					 <td>
    						<label>
						<input type="checkbox" class="form-check-input js-switch" name="" id=""
						 <?= check_access($role['id'], $m['id']); ?> 
						 data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>"/>
						</label>
					 </td>
                          
                        </tr>
						<?php endforeach; ?>
                      </tbody>
                    </table>

                  </div>
                </div>
			   </div>
		   </div>
          	</div>
            </div>
          </div>
        </div>
        <!-- /page content -->

	   <!-- modal -->
	   <!-- Button trigger modal -->