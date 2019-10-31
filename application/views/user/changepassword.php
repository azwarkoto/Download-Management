
    <!-- page content -->
    <div class="right_col" role="main">
   <div class="row">
     <div class="col-md-7">
     <?= $this->session->flashdata('message'); ?>
       <div class="x_panel">
              <div class="x_title">
          <h2><?= $title; ?></h2>
     <div class="container">
    </div>
                <div class="clearfix"></div>
     </div>
      <div class="row">
        <div class="col-md-11">

          <form class="" action="<?= base_url('user/changepassword')?>" method="post">


          <div class="form-group row">

            <div class="form-group">
            <label for="">Current Password:*</label>
          <input type="password" class="form-control" id="current_password" name="current_password">
          <?= form_error('current_password', '<small class="text-danger ">', '</small>'); ?>
        </div>
        <div class="form-group">
         <label for="">Repeat Password:*</label>
          <input type="password" class="form-control" id="new_password1" name="new_password1">
          <?= form_error('new_password1', '<small class="text-danger ">', '</small>'); ?>
        </div>
        <div class="form-group">
         <label for="">New Password:*</label>
          <input type="password" class="form-control" id="new_password2" name="new_password2">
          <?= form_error('new_password2', '<small class="text-danger ">', '</small>'); ?>
        </div>
        <hr>
        <div class="form-group">
        <button type="submit" class="btn btn-success submit">Change Password</button>
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
