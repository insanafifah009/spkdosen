 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Unsur Kegiatan</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Unsur Kegiatan</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo base_url('admin/Menumaster/addunsur')?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Unsur</label>
                  <input type="text" class="form-control" placeholder="Masukkan Unsur Kegiatan" name="txt_unsur">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="exampleb 2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Unsur Kegiatan</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($unsur_kegiatan as $unsur):?>
                <tr>
                  <td><?php echo $unsur['id_unsur'];?></td>
                  <td><?php echo $unsur['nama_unsur'];?></td>
                  <td><?php echo $unsur['kategori']?></td>
                  <td>
                    <a href="<?php echo base_url('admin/Menumaster/tambahsub/').$unsur['id_unsur']?>" class="btn btn-xs btn-success"><i class="fa fa-level-down"></i> Tambah Sub Kegiatan </a>

                    <a href="<?php echo base_url('admin/Menumaster/getUnsur/').$unsur['id_unsur']?>" class="btn btn-warning btn-xs btn_edit_personil"><span class="fa fa-pencil"></span> Edit </a>
                    <a href="<?php echo base_url('admin/Menumaster/deleteUnsur/').$unsur['id_unsur']?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin akan menghapus data?');"><span class="fa fa-trash"></span> Hapus </a>
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