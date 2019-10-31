
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
	<div class="col-md-12">

    <a href="<?= base_url('admin/datauser'); ?>">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-user"></i></div>
          <div class="count"> <?= $this->db->count_all_results('user'); ?></div>
          <h3>User</h3>
          <p>Total User terverfikasi</p>
        </div>
      </div>
    </a>
    <a href="<?= base_url('admin/datauser'); ?>">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-users"></i></div>
          <div class="count"> <?= $this->db->count_all_results('user'); ?></div>
          <h3>All Userr</h3>
          <p>Jumlah semua user</p>
        </div>
      </div>
    </a>
    <a href="<?= base_url('admin/download'); ?>">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-download"></i></div>
        <div class="count"><?= $this->db->count_all_results('user_download');?></div>
        <h3>Jumlah file download</h3>
        <p>Semua file download materi</p>
      </div>
    </div>
  </a>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i></div>
        <div class="count">179</div>
        <h3>New Sign ups</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
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
