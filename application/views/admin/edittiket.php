<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA TIKET</h3>

    <?php foreach($tiket as $tk) : ?>
        
        <form method="post" action="<?php echo base_url(). 'admin/DataTiket/update' ?>">

            <div class="for-group">
                <label>Nama Tiket</label>
                <input type="text" name="nama_tiket" class="form-control" value="<?php echo $tk->nama_tiket ?>">
            </div>
            <div class="for-group">
                <label>Kategori </label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $tk->kategori ?>">
            </div>
            <div class="for-group">
                <label>Kelas</label>
                <input type="hidden" name="id_tiket" class="form-control" value="<?php echo $tk->id ?>">
                <input type="text" name="kelas" class="form-control" value="<?php echo $tk->kelas ?>">
            </div>
            <div class="for-group">
                <label>Info Tanggal</label>
                <input type="hidden" name="id_tiket" class="form-control" value="<?php echo $tk->id ?>">
                <input type="text" name="tahun_terbit" class="form-control" value="<?php echo $tk->info_tanggal ?>">
            </div>
            <div class="for-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $tk->stok ?>">
            </div>
            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $tk->harga ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan </button>

    </form>


    <?php endforeach; ?>
</div>