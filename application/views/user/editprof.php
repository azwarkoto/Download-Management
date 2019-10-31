
        <!-- page content -->
        <div class="right_col" role="main">
		   <div class="row">
			   <div class="col-md-7 ">
			   <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
				   <div class="x_panel">
                  <div class="x_title">
    					<h2><?= $title; ?></h2>
			   <div class="container">
				</div>
                    <div class="clearfix"></div>
			   </div>
    			<div class="row">
    				<div class="col-md-11">

    					<?php echo form_open_multipart('user/editprof'); ?>

					    <div class="form-group row">

    						<div class="form-group">
						    <label for="">Email:*</label>
							<input type="text" class="form-control" id="email" name="email"
							value="<?= $user['email']; ?>" readonly>
						</div>
						<div class="form-group">
						 <label for="">Full name:*</label>
							<input type="text" class="form-control" id="name" name="name"
							value="<?= $user['name']; ?>" >
							<?= form_error('name', '<small class="text-danger ">', '</small>'); ?>
						</div>
						<div class="form-group">
						 	<label for="">Picture:*</label>

						</div>
						<div class="profile_pic">
						<img src="<?= base_url('asset/image/profile/') . $user['image']; ?>"
							 class="img-thumbnail img-responsive">
						</div>
						<div class="form-group col-md-3">
							<input type="file" name="image" id="image">

						</div>


						<div class="col-md-7">
						<button type="submit" class="btn btn-success submit">Update</button>
						</div>
					</form>
				</div>
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
