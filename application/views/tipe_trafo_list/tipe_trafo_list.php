<div class="content-wrapper">
<section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <section class="content">
<div class="row">
                <div class="col-md-5">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Tipe Trafo List</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url();?>/dashboard/add_tipe_trafo_list">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Tipe Trafo</label>
                      <input class="form-control" name="tipe_trafo" type="text" value="<?php echo set_value('tipe_trafo');?>"/><?php echo form_error('tipe_trafo');?>           
                    </div>
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>    <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
                </form>
              </div><!-- /.box -->
            </div>
            <div class="col-xs-7">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tipe Trafo List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                                                <th>No</th>
                                                <th>Name Tipe Trafo</th>
                                                <th>Operasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no=1;
                        foreach ($type_trafo_list as $show) {
                          echo"<tr class=odd gradeX>
                              <td>".$no."</td>
                              <td>".$show->name_type_trafo."</td>
                              <td><a href=".site_url('')."/dashboard/edit_tipe_trafo_list/$show->id_type_trafo> <button type='button' class='btn btn-success btn-circle'><i class='fa fa-link'></i></button></a>
                              <a href=".site_url('')."/dashboard/delete_tipe_trafo_list/$show->id_type_trafo><button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button></a>
                              </td>
                              </tr>";
                          $no++;
                              }
                                            
                      ?>                         
                    </tbody>
                    <tfoot>
                      <tr>
                        
                      </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


</div>
</section>
</div>
<footer class="main-footer">
<div class="pull-right hidden-xs">
    <b>Version</b> 2.3.0
</div>
<strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">bootsrtap</a>.</strong> All rights reserved.
</footer>
