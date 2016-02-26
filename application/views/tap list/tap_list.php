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
                  <h3 class="box-title">Tambah Tap List</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url();?>/dashboard/add_tap_list">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name Tap</label>
                      <input class="form-control" name="name_tap" type="text" value="<?php echo set_value('name_tap');?>"/><?php echo form_error('name_tap');?>           
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nilai</label>
                              <input type='number' class="form-control" name="nilai_tap"  value="<?php echo set_value('nilai_tap');?>"/><?php echo form_error('nilai_tap');?>  
                                
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
                  <h3 class="box-title">Tap List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                                                <th>No</th>
                                                <th>Name Tap</th>
                                                <th>Nilai</th>
                                                <th>Operasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no=1;
                        foreach ($tap_list as $show) {
                          echo"<tr class=odd gradeX>
                              <td>".$no."</td>
                              <td>".$show->name_tap."</td>
                              <td>".$show->nilai_tap."</td>
                              <td><a href=".site_url('')."/dashboard/edit_tap_list/$show->id_tap_list> <button type='button' class='btn btn-success btn-circle'><i class='fa fa-link'></i></button></a>
                              <a href=".site_url('')."/dashboard/delete_tap_list/$show->id_tap_list><button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button></a>
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
