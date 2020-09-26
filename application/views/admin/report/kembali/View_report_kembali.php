<!--css khusus halaman ini -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">


<!--modal dialog untuk hapus -->

<!--content -->
<div class="box box-solid box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-book"></i> Daftar Pengembalian Buku</h3>
    <div class="box-tools pull-right">

    </div><!-- /.box-tools -->

  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="form-group"></div>
    <table id="table-buku1" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>ID Anggota</th>
          <th>Nama Peminjam</th>
          <th>Kelas</th>
          <th>Kode Kartu</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Tanggal Dikembalikan</th>
          <th>Telat</th>
          <th>Denda</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($data_detail_pinjam->result_array() as $op) {
          if ($op['flag'] == 1) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>

              <?php $op['id_pinjam']; ?>

              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_pinjam->result_array()  as $op2) {
                        if ($op2['id_pinjam'] == $pinjam) {
                          echo $idangg = $op2['id_anggota'];
                        }
                      } ?></td>

              <td><?php $buku = $op2['id_anggota'];
                      foreach ($data_anggota->result_array()  as $op3) {
                        if ($op3['id_anggota'] == $idangg) {
                          echo $op3['nama'];
                          $kls = $op3['id_kelas'];
                          $kode_kartu = $op3['id_anggota'];
                        }
                      } ?>
              </td>

              <td><?php $kelas = $op3['id_kelas'];
                      foreach ($data_kelas->result_array()  as $op4) {
                        if ($op4['id_kelas'] == $kls) {
                          echo $op4['kelas'];
                        }
                      } ?>
              </td>

              <td><?php $buku = $op2['id_anggota'];
                      foreach ($data_anggota->result_array()  as $op5) {
                        if ($op5['id_anggota'] == $idangg) {
                          echo $op5['kode_kartu'];
                        }
                      } ?>
              </td>

              <td><?php $buku = $op['id_buku'];
                      foreach ($data_buku->result_array()  as $op2) {
                        if ($op2['id_buku'] == $buku) {
                          echo $op2['judul'];
                        }
                      } ?>
              </td>

              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_pinjam->result_array()  as $op5) {
                        if ($op5['id_pinjam'] == $pinjam) {
                          echo $op5['tgl_pinjam'];
                        }
                      } ?></td>
              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_pinjam->result_array()  as $op5) {
                        if ($op5['id_pinjam'] == $pinjam) {
                          echo $op5['tgl_kembali'];
                        }
                      } ?></td>

              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_kembali->result_array()  as $op5) {
                        if ($op5['id_pinjam'] == $pinjam) {
                          echo $op5['tgl_dikembalikan'];
                        }
                      } ?></td>

              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_kembali->result_array()  as $op5) {
                        if ($op5['id_pinjam'] == $pinjam) {
                          echo $op5['terlambat'];
                        }
                      } ?></td>

              <td><?php $pinjam = $op['id_pinjam'];
                      foreach ($data_kembali->result_array()  as $op5) {
                        if ($op5['id_pinjam'] == $pinjam) {
                          echo $op5['denda'];
                        }
                      } ?></td>

            </tr>
        <?php
          }
        }
        ?>
      </tbody>
    </table>
    <div>
      <h3><a href="<?php echo base_url(); ?>admin/Report/pdf_kembali" class="btn btn-warning" role="button" data-toggle="tooltip"><i class="fa fa-print"></i> Print PDF</a></h3>
    </div>
    <div>
      <h3><a href="<?php echo base_url(); ?>admin/Report/excel1" class="btn btn-danger" role="button" data-toggle="tooltip"><i class="fa fa-print"></i> Export Excel</a></h3>
    </div>
  </div>
  <div class="box-footer">
    Menampilkan daftar pengembalian buku
  </div><!-- box-footer -->
</div><!-- /.box -->