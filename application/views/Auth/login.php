

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth'); ?>">


		    <h1>SIGN IN</h1>
	<?= $this->session->flashdata('message'); ?>
		    <div class="col-sm-12">
              <div>
		    <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
			 value="<?= set_value('email'); ?>"  />
              </div>
              <div>
		    <?= form_error('password', '<small class="text-danger ">', '</small>'); ?>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
              </div>
              <div class='col-sm-2'>
                <button type="submit" class="btn btn-success submit" >Log in</button>
			</div>
			<a class="reset_pass" href="<?= base_url('auth/forgotpassword');?>">Forgot Password?</a>
		</div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?= base_url('auth/register') ?>" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
