 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Pengajaran</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENGAJARAN</li>
      </ol>
    </section>
    <!-- Main content -->
   
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('dosen/Menudupak/tambahPengajaran') ?>" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Unsur Pengajaran</a>
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
                  <th>Mata Kuliah</th>
                  <th>SKS</th>
                  <th>Semester</th>
                  <th>Tahun Akademik</th>
                  <th>Tempat/Instansi</th>
                  <th>Tanggal</th>
                  <th>File</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                   <?php foreach ($pengajaran as $pen):?>
                <tr>
                  <td><?php echo $pen['id_pengajaran'] ?></td>
                  <td><?php echo $pen['nip'];?></td>
                  <td><?php echo $pen['nama_unsur'];?></td>
                  <td><?php echo $pen['nama_sub'];?></td>
                  <td><?php echo $pen['nama_uraian'];?></td>
                  <td><?php echo $pen['matakuliah'];?></td>
                  <td><?php echo $pen['sks'];?></td>
                  <td><?php echo $pen['semester'] ?></td>
                  <td><?php echo $pen['tahun'];?></td>
                  <td><?php echo $pen['tempat'];?></td>
                  <td><?php echo $pen['tanggal'];?></td>
                  <td></td> 
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
