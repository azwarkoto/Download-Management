
        <!-- page content -->
        <div class="right_col" role="main">
		   <div class="row">
			   <div class="col-md-6 col-sm-6 col-xs-12">
				   <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Menu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="" calss="btn btn-primary" data-toggle="modal" data-target="#newMenuModal">
						  Add New Menu</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
			   </div>
			  <?= form_error('menu', '<div class="alert alert-danger sm" role="alert">', '</div>') ?>

			  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Menu</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $i = 1; ?>
					  <?php foreach ($menu as $m) : ?>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $m['menu']; ?></td>
                          <td>
						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
						<a href="<?=base_url();?>edit/hapusdm/<?= $m['id'];?>" class="btn btn-danger btn-xs tombol-hapus"><i class="fa fa-trash"></i> Delete </a>
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

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('edit'); ?>" method ="post">

			<div class="form-group">

		<input type="text" class="form-control" id="menu" name="menu" placeholder="Menu Name">
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
