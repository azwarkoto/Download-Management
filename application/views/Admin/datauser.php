
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
<div class="container">
<div class="col-md-12 text-center">

<div class="col-md-12 col-sm-12 col-xs-12">
<h1>Data User</h1>
<div class="x_panel">
  <div class="pull-left">
    <h4>Data user actived</h4>
  </div>
       <div class="x_title">
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
           <li><a class="close-link"><i class="fa fa-close"></i></a>
           </li>
         </ul>
         <div class="clearfix"></div>


          <?= $this->session->flashdata('message'); ?>
          </div>

                    <div class="x_content">

                      <table id="datauser1" class="table table-bordered table-hover" >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actived</th>
                            <th>Date Created</th>

                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($name as $n) : ?>
                            <?php if ($n['is_active'] != 0) : ?>

                          <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $n['name']; ?></td>
                            <td><?= $n['email']; ?></td>
                            <td><?php
                                if ($n['role_id'] == 1) {
                                  echo 'Admin';
                                }else {
                                  echo 'User';
                                }
                             ?></td>
                            <td><?php
               						if ($n['is_active'] == 1) {
               							echo 'Active';

               						} else {

               							echo 'No active';
               						}
               						?></td>
                            <td><?= date('d-F-Y', $user['date_created']); ?></td>
                            <td>
              <a href="<?=base_url();?>admin/hapusdu/<?= $n['id'];  ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>  </a>
                           </td>
                          </tr>
                        <?php endif; ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
           </div>
         </div>
</div>
<!-- no active  -->
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="pull-left">
    <h4>Data user no actived</h4>
  </div>
       <div class="x_title">
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
           <li><a class="close-link"><i class="fa fa-close"></i></a>
           </li>
         </ul>
         <div class="clearfix"></div>


          <?= $this->session->flashdata('message'); ?>
          </div>

                    <div class="x_content">

                      <table id="datauser2" class="table table-striped table-bordered table-hover" >
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actived</th>
                            <th>Date Created</th>

                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1; ?>
                          <?php foreach ($name as $n)  : ?>
                          <?php if ($n['is_active'] != 1) : ?>


                          <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $n['name']; ?></td>
                            <td><?= $n['email']; ?></td>
                            <td><?php
                                if ($n['role_id'] == 1) {
                                  echo 'Admin';
                                }else {
                                  echo 'User';
                                }
                             ?></td>
                            <td><?php
               						if ($n['is_active'] == 1) {
               							echo 'Active';

               						} else {

               							echo 'No active';
               						}
               						?></td>
                            <td><?= date('d-F-Y', $user['date_created']); ?></td>



                            <td>

              <a href="<?=base_url();?>admin/hapusdu/<?= $n['id'];  ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>  </a>

                           </td>
                          </tr>
                        <?php endif; ?>
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

            <!-- next bikin mini modal -->
