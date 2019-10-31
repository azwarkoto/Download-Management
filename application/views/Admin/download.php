
        <!-- page content -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">

        </div>
<div class="right_col" role="main">
<div class="row">
	<div class="container">

      <div class="col-md-12 col-sm-12 col-xs-12">
        		<h1> Download Page ! </h1>
        <div class="x_panel">
               <div class="x_title">

                 <ul class="nav navbar-right panel_toolbox">
                   <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                   </li>
                   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" title="Add File" data-toggle="modal" data-target="#newFileModal" role="button" aria-expanded="false"><i class="fa fa-plus-circle"></i></a>
                 </ul>
                 <div class="clearfix"></div>
               </div>
                  <div class="row">
                      <div class="col-md-11">
                        <div class="col-md-10">



                        </div>
                                  <div class="x_content">

                                    <table id="download" class="table table-striped table-bordered table-hover" >
                                      <thead>
                                        <tr>
                                          <th>No</th>
                                          <th>Nama</th>
                                          <th>Kategori</th>
                                          <th>Upload Created</th>
                                          <th>Nama File</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($nama as $n) : ?>

                                        <tr>
                                          <th scope="row"><?= $i++; ?></th>
                                          <td><?= $n['nama']; ?></td>
                                          <td><?= $n['kategori']; ?></td>
                                          <td><?= date('d-F-Y', $user['date_created']); ?></td>
                                          <td><?= $n['filename']; ?></td>
                                          <td>
                						<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                						<a href="<?=base_url();?>admin/hapusdl/<?= $n['id'];  ?>" class="btn btn-danger btn-xs tombol-hapus" >
                              <i class="fa fa-trash" ></i> Delete </a>
                						<a href="#" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> Detail </a>
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

          <!-- /page content -->

          <!-- next bikin mini modal -->
          <!-- Modal -->
          <div class="modal fade" id="newFileModal" tabindex="-1" role="dialog" aria-labelledby="newFileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="newFileModalLabel">Add file download</h5>
                  <a href="<?= base_url('admin/download') ?>" type="button" class="close"  aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </a>
                </div>
                <div class="modal-body">
                  <?php echo form_open_multipart('admin/download'); ?>

          			<div class="form-group col-md-11">
          		<input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
          		<input type="file" class="custom-file-input" id="filename" name="filename" placeholder="File Name" required>
                </div>
                <div class="form-group col-md-5">
            <input type="text" class="form-control" id="nama" name="kategori" placeholder="Kategori">
             </div>

                </div>
                <div class="modal-footer">
                  <a href="<?= base_url('admin/download') ?>" type="button" class="btn btn-warning" >Close</a>
                  <button type="submit" class="btn btn-primary">Add</button>
          	 </div>
          	 <?php echo form_close(); ?>
              </div>
  </div>
</div>
</div>
