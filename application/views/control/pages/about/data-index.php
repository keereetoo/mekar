
<div class="right_col" role="main">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      <div class="x_content">
        <p class="text-muted font-13 m-b-30">
          <div class="row">
            <div class="form-group">
              <div class="col-lg-12 text-right" >
                <a href="<?= base_url().'control/'.$page.'/?type=add' ?>" class="btn btn-danger"  title="add data">New Data</a>
              </div>
            </div>
          </div>
          <br>
        </p>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">

              <div class="row">
                <div class="form-group">
                 <ul class="nav nav-tabs">
                   <!-- menu -->
                   <li class="active"><a data-toggle="tab" href="#TH">TH</a></li>
                   <li><a data-toggle="tab" href="#EN">EN</a></li>
                 </ul>
               </div>
             </div>

             <div class="tab-content">

              <div id="TH" class="tab-pane fade in active">
                <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="col-lg-12">
                    <label for="about_detail_TH">ข้อความหน้า about</label>
                    <textarea name="about_detail_TH"  class="form-control" ></textarea>
                  </div>
                </div>
              </div>

              <div id="EN" class="tab-pane fade in ">
                <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                  <div class="col-lg-12">
                    <label for="about_detail_TH">Detail about</label>
                    <textarea name="about_detail_EN" class="form-control" ></textarea>
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
</div>
<script>
  CKEDITOR.replace( 'about_detail_TH' );
  CKEDITOR.replace( 'about_detail_EN' );
</script>