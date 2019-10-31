<div class="container">

  <div class="col-md-12 col-sm-5 col-xs-12 form-group pull-right top_search">

    <div class="dropdown mt-2">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class=" fa fa-list text-primary mr-2"></i>Daftar Isi
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="<?= base_url('about/download/materi'); ?>" class="dropdown-item" type="btn">Materi</a>
    <a href="#" class="dropdown-item" type="btn">Source Code</a>
    <a href="#" class="dropdown-item" type="btn">Tugas Kampus</a>
  </div>
</div>
</div>



  <div class="row">
      <div class="col-md-10">
        <div class="row justify-content-end">
          <div class="col-md-4 col-sm-2 col-xs-1 ">
            <form class="" action="<?= base_url('about/download') ?>" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="Search Keyword .. " autocomplete="off">
          <div class="input-group-append">
              <input class="btn btn-primary" type="submit" name="submit">
          </div>
        </div>
            </form>
          </div>
        </div>
       
        <table id="download" class="table table-striped table-bordered table-hover" >
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th>
              <th scope="col">File name</th>
              <th scope="col">Download</th>
            </tr>
          </thead>
          <tbody>
            <?php if (empty($materi)) :?>
              <tr>
                <td colspan="4" class="text-center">Data not found!</td>
              </tr>
            <?php endif ; ?>

              <?php $i = 1 ?>
            <?php foreach ($materi as $n) : ?>

              <!-- apakah harus 2 foreach   -->
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $n['nama']; ?></td>
              <td><?= $n['filename']; ?></td>
              <td><a href="<?= base_url().'asset/download/file/'.$n['filename'] ?>" class="badge button-light "><i class="fas fa-download"></i> Download</a></td>
            </tr>

          </tbody>
            <?php endforeach; ?>
        </table>


      </div>
  </div>

</div>
