
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
        </p>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">

              <div id="datatable-checkbox_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="dataTables_length" id="datatable-checkbox_length">
                      <label>Show <select name="datatable-checkbox_length" aria-controls="datatable-checkbox" class="form-control input-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entries</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div id="datatable-checkbox_filter" class="dataTables_filter">
                      <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-checkbox"></label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid" aria-describedby="datatable-checkbox_info">
                      <thead>
                        <tr role="row">
                          <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
                          " style="width: 6px;">
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-checkbox" rowspan="1" colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending" style="width: 33px;">
                          <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;">
                            <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                            </ins>
                          </div>
                        </th>
                        <th class="sorting" style="width: 139px;">Name</th>
                        <th class="sorting" style="width: 232px;">Position</th>
                        <th class="sorting" style="width: 102px;">Office</th>
                        <th class="sorting" style="width: 51px;">Age</th>
                        <th class="sorting" style="width: 100px;">Start date</th>
                        <th class="sorting" style="width: 78px;">Salary</th>
                      </tr>
                    </thead>


                    <tbody>
                      <tr role="row" class="odd">
                        <td>
                        </td><th class="sorting_1"><div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></th>

                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="dataTables_info" id="datatable-checkbox_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="datatable-checkbox_paginate">
                    <ul class="pagination">
                      <li class="paginate_button previous disabled" id="datatable-checkbox_previous">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="0" tabindex="0">Previous</a>
                      </li>
                      <li class="paginate_button active">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="1" tabindex="0">1</a>
                      </li>
                      <li class="paginate_button ">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="2" tabindex="0">2</a>
                      </li>
                      <li class="paginate_button ">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="3" tabindex="0">3</a>
                      </li>
                      <li class="paginate_button ">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="4" tabindex="0">4</a>
                      </li>
                      <li class="paginate_button ">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="5" tabindex="0">5</a>
                      </li>
                      <li class="paginate_button ">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="6" tabindex="0">6</a>
                      </li>
                      <li class="paginate_button next" id="datatable-checkbox_next">
                        <a href="#" aria-controls="datatable-checkbox" data-dt-idx="7" tabindex="0">Next</a>
                      </li>
                    </ul></div>
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