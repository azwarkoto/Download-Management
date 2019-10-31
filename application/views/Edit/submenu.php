
        <!-- page content -->
        <div class="right_col" role="main">
		   <div class="row">
			   <div class="col-md-12 col-sm-12 col-xs-12">
				   <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Sabmenu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#newMenuModal" role="button" aria-expanded="false"><i class="fa fa-plus-circle"></i></a>

                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
			   </div>
			   <?php if (validation_errors()) : ?>
			   <?= validation_errors() ?>
			   <?php endif; ?>
			  <?= form_error('menu', '<div class="alert alert-danger sm" role="alert">', '</div>') ?>

			  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                  <div class="x_content">
                    <div class="table-responsive">
                    <table id="submenu" class="table table-striped table-bordered table-hover" >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Submenu</th>
                          <th>Menu</th>
                          <th>Url</th>
                          <th>Icon</th>
                          <th>Active</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

					  <?php $i = 1; ?>
					  <?php foreach ($subMenu as $sm) : ?>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $sm['title']; ?></td>
                          <td><?= $sm['menu']; ?></td>
                          <td><?= $sm['url']; ?></td>
                          <td><?= $sm['icon']; ?></td>
					 <td>
						 <?php
						if ($sm['is_active'] == 1) {
							echo 'ON';

						} else {

							echo 'OF';
						}
						?></td>
                          <td>
						<a href="<?=base_url();?>edit/edit/<?= $sm['id'];  ?>" class="btn btn-primary btn-xs" ><i class="fa fa-edit"></i> Edit </a>
						<a href="<?=base_url();?>edit/hapussb/<?= $sm['id'];  ?>" class="btn btn-danger btn-xs tombol-hapus"
              onclick="return confirm('yakin akan menghapus data ini');"><i class="fa fa-trash"></i> Delete </a>
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
        </div>
        <!-- /page content -->

	   <!-- modal -->
	   <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Submenu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('edit/submenu'); ?>" method ="post">

		<div class="form-group">
		<input type="text" class="form-control" id="title" name="title" placeholder="Sabmenu Name">
  		</div>
		<div class="form-group">
    		<select name="menu_id" id="menu_id" class="form-control">
    			<option value="">Select Menu</option>
			    <?php foreach ($menu as $m) : ?>
    					<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
			    <?php endforeach; ?>
		</select>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" id="url" name="url" placeholder="url">
		  </div>
		  <div class="form-group">
		<input type="text" class="form-control" id="icon" name="icon" placeholder="Icon">
  		</div>
		  <div class="form-group">
    			<label>
               <input type="checkbox" class="js-switch" value="1" name="is_active" id="is_active" checked /> Active?
               </label>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
	 </div>
	 </form>
    </div>
    <!-- Sub Menu -->
  </div>
</div>
