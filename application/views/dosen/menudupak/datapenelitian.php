 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Penelitian</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENELITIAN</li>
      </ol>
    </section>
    <!-- Main content -->
    
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('dosen/Penelitian/tambah') ?>" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Unsur Penelitian</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exampleb 2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Unsur Kegiatan</th>
                  <th>Sub Kegiatan</th>
                  <th>Uraian Kegiatan</th>
                  <th>Judul Penelitian</th>
                  <th>Link</th>
                  <th>Satuan Hasil</th>
                  <th>Jumlah Volume Kegiatan</th>
                  <th>Angka Kredit</th>
                  <th>Jumlah Angka Kredit</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                   <?php foreach ($penelitian as $pen):?>
                <tr>
                  <td><?php echo $pen['id_penelitian'] ?></td>
                  <td><?php echo $pen['nama_unsur'];?></td>
                  <td><?php echo $pen['nama_sub'];?></td>
                  <td><?php echo $pen['nama_uraian'];?></td>
                  <td><?php echo $pen['judul'];?></td>
                  <td><?php echo $pen['link'];?></td>
                  <td><?php echo $pen['satuan_hasil'];?></td>
                  <td><?php echo $pen['jumlah_volume'];?></td>
                  <td><?php echo $pen['angka_kredit'];?></td>
                  <td><?php echo $pen['jumlah_ak'];?></td>
                  <td>
                    <a href="" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span></a>
                    <a href="" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span></a>
                  </td>

                </tr>
                <?php endforeach;?>
                
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </div>