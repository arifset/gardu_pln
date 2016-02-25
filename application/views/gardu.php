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
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tabel Gardu</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Gardu</th>
                        <th>Jenis Gardu</th>
                        <th>GI Gardu</th>
                        <th>Alamat Gardu</th>
                        <th>Temp Gardu</th>
                        <th>Trafo</th>
                        <th>Operasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no=1;
                        foreach ($gardu as $gardu_show) {
                                                echo"<tr class=odd gradeX>
                            <td>".$no."</td>
                            <td>".$gardu_show->nama_gardu."</td>
                            <td>".$gardu_show->nama_jenis_gardu."</td>
                            <td>".$gardu_show->nama_gi_gardu."</td>
                            <td>".$gardu_show->alamat_gardu."</td>
                            <td>".$gardu_show->temp_gardu."</td>
                            <td>".$gardu_show->name_trafo."</td>
                            <td><a href=".site_url('')."/dashboard/edit_gardu/$gardu_show->id_gardu> <button type='button' class='btn btn-success btn-circle'><i class='fa fa-link'></i></button></a>
                            <a href=".site_url('')."/dashboard/delete_gardu/$gardu_show->id_gardu><button type='button' class='btn btn-warning btn-circle'><i class='fa fa-times'></i></button></a>
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
                