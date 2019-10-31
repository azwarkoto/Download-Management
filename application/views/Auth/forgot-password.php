

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth/forgotpassword'); ?>">


		    <h1>Forgot password ?</h1>
	<?= $this->session->flashdata('message'); ?>
		    <div class="col-sm-12">
              <div class='col-sm-12'>
		    <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
			 value="<?= set_value('email'); ?>" autocomplete="off" />
              </div>

              <div class='col-sm-1'>
                <button type="submit" class="btn btn-success submit" >Reset password</button>
			</div>

		</div>

              <div class="clearfix"></div>

              <div class="separator">

                  <a href="<?= base_url('auth') ?>" class="to_register"> <h5>&larr; Back to login</h5> </a>


                <div class="clearfix"></div>
                <br />

                <div>
