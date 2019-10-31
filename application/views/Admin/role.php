
        <!-- page content -->
        <div class="right_col" role="main">
		   <div class="row">
			   <div class="col-md-6">
				   <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Menu</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#newRoleModal" role="button" aria-expanded="false"><i class="fa fa-plus-circle"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
			   </div>
			  <?= form_error('menu', '<div class="alert alert-danger sm" role="alert">', '</div>') ?>

			  <?= $this->session->flashdata('message'); ?>




                  <div class="x_content">

                    <table class="table" id="role">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Role</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php $i = 1; ?>
					  <?php foreach ($role as $r) : ?>
                        <tr>
                          <th scope="row"><?= $i++; ?></th>
                          <td><?= $r['role']; ?></td>
                          <td class="text-center">
						<a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Access </a>
						<a href="<?= base_url('admin/hapusrl/') . $r['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
						<a href="" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editRoleModal"><i class="fa fa-edit"></i> Edit </a>

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
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/role'); ?>" method ="post">

			<div class="form-group">

		<input type="text" class="form-control" id="role" name="role" placeholder="Menu Role">
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

<!--Modal edit  -->
<div class="modal fade" id="editRoleModal" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editRoleModalLabel">Edit Role</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/editrl'); ?>" method ="post">

      <div class="form-group">

    <input type="text" class="form-control" id="role" name="role" value="<?= $user['role']; ?>">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
   </div>
   </form>
    </div>
  </div>
</div>
