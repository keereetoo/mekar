 <!DOCTYPE html>
 <html lang="en">
 <head>
  <base href="<?= base_url() ?>">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <?php $this->load->view('control/head-script') ?>

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url()."control" ?>" class="site_title"><i class="fa fa-paw"></i> <span>MekarHome</span></a>
          </div>

          <div class="clearfix"></div>


          <?php $this->load->view('control/left-menu'); ?>
          <!-- top navigation -->
          <?php $this->load->view('control/navbar'); ?>
          <!-- page content -->
          <?php if($type=='add') {
            $this->load->view('control/pages/'.$page.'/data-add');
          }elseif ($type=='edit') {
            $this->load->view('control/pages/'.$page.'/data-edit');
          }else{
            $this->load->view('control/pages/'.$page.'/data-index');
          } ?>
          <!-- page content -->

          <!-- footer content -->
          <?php $this->load->view('control/footer') ?>
          <!-- /footer content -->
        </div>
      </div>

      <?php $this->load->view('control/footer-script') ?>

    </body>
    </html>
