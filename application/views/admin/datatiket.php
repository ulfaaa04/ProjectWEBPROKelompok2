<div class="container-fluid">
    <button class="btn btn-sm btn-info mb-3" data-toggle="modal" data-target="#tambah_tiket"><i class="fas fa-plus fa-sm">Tambah Tiket</i></button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Tiket</th>
            <th>Kategori</th>
            <th>Kelas</th>
            <th>Info_Tanggal</th>
            <th>Stok</th>
            <th>Harga</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($tiket as $tk) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tk->nama_tiket ?></td>
            <td><?php echo $tk->kategori ?></td>
            <td><?php echo $tk->kelas ?></td>
            <td><?php echo $tk->info_tanggal ?></td>
            <td><?php echo $tk->stok ?></td>
            <td><?php echo $tk->harga ?></td>
            <td><?php echo anchor('admin/DataTiket/edit/' .$tk->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/DataTiket/hapus/' .$tk->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>

        <?php endforeach ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_tiket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Tiket</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/datatiket/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
                <label>Nama Tiket</label>
                <input type="text" name="nama_tiket" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                <option>Pesawat</option>
                <option>Kereta</option>
                <option>Bus</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="kelas">
                <option>Utama</option>
                <option>Bisnis</option>
                <option>Ekonomi</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label>Info Tanggal</label>
                <input type="text" name="info_tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar Tiket</label>
                <input type="file" name="image" class="form-control">
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>