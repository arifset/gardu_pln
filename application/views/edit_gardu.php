<div class="content-wrapper">
        <!-- Content Header (Page header) -->
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
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Ubah Gardu</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" action="<?php echo site_url();?>/dashboard/save_edit_gardu">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Gardu</label>
                     <input class="form-control" name="id_gardu" type="hidden" value="<?php echo $gardu->id_gardu;?>"/><?php echo form_error('nama_gardu');?>  
                                
                            <input class="form-control" name="nama_gardu" type="text" value="<?php echo $gardu->nama_gardu;?>"/><?php echo form_error('nama_gardu');?>  
                                </div>
                    <div class="form-group">
                      <label>Jenis Gardu</label>
                      <select class="form-control" name="jenis_gardu">
                                            <?php 
                                                foreach ($jenis_gardu as $value) {
                                                    if($value->id_jenis_gardu==$gardu->jenis_gardu){
                                                        echo"<option value=$value->id_jenis_gardu selected>$value->nama_jenis_gardu</option>";
                                                    }else{
                                                        echo"<option value=$value->id_jenis_gardu>$value->nama_jenis_gardu</option>";    
                                                    }
                                                }
                                            ?>
                                        </select>
  
                    </div>
                    <div class="form-group">
                      <label>GI Gardu</label>
                      <select class="form-control" name="gi_gardu">
                                            <?php 
                                                foreach ($gi_gardu as $value) {
                                                    if($value->id_gi_gardu==$gardu->gi_gardu){
                                                        echo"<option value=$value->id_gi_gardu selected>$value->nama_gi_gardu</option>";
                                                    }else{
                                                        echo"<option value=$value->id_gi_gardu>$value->nama_gi_gardu</option>";
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                                                    <textarea class="form-control" rows="3" name="alamat"><?php echo $gardu->alamat_gardu;?></textarea><?php echo form_error('alamat');?>
    
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Temp Gardu</label>
                               <input class="form-control" name="temp_gardu" type="text" value="<?php echo $gardu->temp_gardu;?>"/> <?php echo form_error('temp_gardu'); ?>                                        
                               
                    </div>
                    <div class="form-group">
                      <label>Trafo</label>
                      <select class="form-control" name="jenis_trafo">
                                            <?php 
                                                foreach ($trafo_list as $value) {
                                                    if($value->id_name==$gardu->id_name){
                                                        echo"<option value=$value->id_name selected>$value->name_trafo</option>";
                                                    }else{
                                                        echo"<option value=$value->id_name>$value->name_trafo</option>";    
                                                    }
                                                }
                                            ?>
                                        </select>
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>    <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
                </form>
              </div><!-- /.box -->

          </div>
</div>



