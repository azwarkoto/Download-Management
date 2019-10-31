

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth/changepassword'); ?>">


		    <h1>Change Password ?</h1><h5> to : <?= $this->session->userdata('reset_email'); ?></h5> <p>
          <hr>

	<?= $this->session->flashdata('message'); ?>

		    <div class="col-sm-12">
              <div class='col-sm-12'>
		    <?= form_error('password1', '<small class="text-danger ">', '</small>'); ?>
                <input type="password" class="form-control" id="password1" name="password1" placeholder="Enter new password" />
              </div>
              <div class='col-sm-12'>
		    <?= form_error('password2', '<small class="text-danger ">', '</small>'); ?>
                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat password" />
              </div>

              <div class='col-sm-1'>
                <button type="submit" class="btn btn-success submit" >Change password</button>
			</div>

		</div>

              <div class="clearfix"></div>

              <div class="separator">



                <div class="clearfix"></div>
                <br />

                <div>
