

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="<?= base_url('auth/register'); ?>">
              <h1>SIGN UP</h1>
              <div class="col-sm-12">
		    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
			  value="<?= set_value('name'); ?>" autocomplete="off"  />
              </div>
              <div class="col-sm-12">
		    <?= form_error('email', '<small class="text-danger ">', '</small>'); ?>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email"
			 value="<?= set_value('email'); ?>" autocomplete="off"  />
              </div>
              <div class="col-sm-6 mb-3 mb-sm-0">
			 <input type="password" class="form-control" id="password1" name="password1" placeholder="Password"  />
			 <?= form_error('password1', '<small class="text-danger mt-4">', '</small>'); ?>
		    </div>
		    <div class="col-sm-6 mb-3 mb-sm-0">
			 <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password"  />
		    </div>

              <div class='col-sm-2'>
                <button type="submit" class="btn btn-success submit" >Sign Up</button>
              </div>
		    <div>
		    <a class="reset_pass" href="<?= base_url('auth/forgotpassword');?>">Forgot Password?</a>
		    </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?= base_url('auth') ?>" class="to_register"> Have Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
