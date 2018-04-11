
<div class="right_col" role="main">
  <!-- <div class="col-md-12 col-sm-12 col-xs-12"> -->
    <div class="x_panel">
      <div class="x_content">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <form role="form" action="<?php echo base_url('control/'.$page.'/update');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="method" value="update"/>
                <input type="hidden" name="id" value="<?= $detail['slide_id'] ?>"/>


                
                <div class="panel-heading"><strong>เพิ่มข้อมูล</strong></div>

                <div class="col-lg-12 text-right">  
                  <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
                </div>  

                <div class="panel-body">



                  <div class="row">

                    <div class="col-6">
                      <div class="form-group">
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#home">TH</a></li>
                          <li><a data-toggle="tab" href="#EN">EN</a></li>
                        </ul>
                      </div>
                    </div>

                  </div>

                  <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">

                      <div class="row">
                        <div class="form-group">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="title">ชื่อรูป</label>
                              <input type="text" name="Title_TH" class="form-control" value="<?= $detail['slide_title_TH'] ?>">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="title">ข้อความ รูป</label>
                              <input type="text" name="Detail_TH" class="form-control" value="<?= $detail['slide_des_TH'] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div id="EN" class="tab-pane fade">
                     <div class="row">
                       <div class="col-lg-12">
                        <div class="form-group">
                          <label for="title">Picture Name</label>
                          <input type="text" name="Title_EN" class="form-control" value="<?= $detail['slide_title_EN'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     <div class="col-lg-12">
                      <div class="form-group">
                        <label for="title">Picture Title</label>
                        <input type="text" name="Detail_EN" class="form-control" value="<?= $detail['slide_des_EN'] ?>">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="title">รูปภาพ</label>
                      <input type="file" name="images" id="" class="">
                    </div>
                  </div>
                </div>

              </div>

            </div>






            <div class="col-lg-12 text-right">  
              <button type="submit" class="btn btn-success ">บันทึกข้อมูล</button>
            </div>  

            <!-- /.row (nested) -->

            <!-- /.panel-body -->

            <!-- /.panel -->
            <!-- /.col-lg-12 -->          

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
</div>
