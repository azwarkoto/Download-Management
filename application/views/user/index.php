 
        <!-- page content -->
        <div class="right_col" role="main">
<div class="row">
	<div class="col-md-3">
			<?= $this->session->flashdata('message'); ?>
		<div class="x_panel fixed_height_390">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>
                                    <i class="fa fa-envelope-o" title="<?= $user['email'] ?>"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?= base_url('asset/image/profile/') . $user['image']; ?>" alt="..." class="img-circle profile_img">
                                </li>
                                <li>
                                  <a>
                                    <i class="fa fa-twitter"></i>
                                  </a>
                                </li>
                              </ul>
                            </div> <br>

                            <h3 class="name text-center"><?= $user['name']; ?></h3>

                            <div class="flex">
                              <ul class="list-inline count2 text-center tex">
                                 Member Since <?= date('d F Y', $user['date_created']); ?> 
                              </ul>
                            </div>
                            <p>
                              Bijaklah dalam menggunakan aplikasi ini 
                            </p>
                          </div>
                        </div>
				    
          	</div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- next bikin mini modal -->