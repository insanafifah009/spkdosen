 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Data Penunjang</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PENUNJANG</li>
      </ol>
    </section>
    <!-- Main content -->

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('dosen/Menudupak/tambahPenunjang') ?>" class="btn btn-info pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Unsur Penunjang</a>
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
                  <th>Kegiatan</th>
                  <th>Tingkat/Kedudukan</th>
                  <th>Tempat</th>
                  <th>Tanggal</th><th>Satuan Hasil</th>
                  <th>Jumlah Volume Kegiatan</th>
                  <th>Angka Kredit</th>
                  <th>Jumlah Angka Kredit</th>
                  <th>File</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody> <?php foreach ($penunjang as $pend):?>
                <tr>
                  <td><?php echo $pend['id_penunjang'] ?></td>
                  <td><?php echo $pend['nip'];?></td>
                  <td><?php echo $pend['nama_unsur'];?></td>
                  <td><?php echo $pend['nama_sub'];?></td>
                  <td><?php echo $pend['nama_uraian'];?></td>
                  <td><?php echo $pend['kegiatan'];?></td>
                  <td><?php echo $pend['tingkat'];?></td>
                  <td><?php echo $pend['tempat'];?></td>
                  <td><?php echo $pend['tanggal'];?></td>
                  <td><?php echo $pend['satuan_hasil'];?></td>
                  <td><?php echo $pend['jumlah_volume'];?></td>
                  <td><?php echo $pend['angka_kredit'];?></td>
                  <td><?php echo $pend['jumlah_ak'];?></td>
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
