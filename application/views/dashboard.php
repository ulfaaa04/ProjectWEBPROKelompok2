<div class="container fluid">

    <div class="row text-center mt-3">

        <?php foreach ($tiket as $tk) : ?>

            <div class="card ml-4 mb-4" style="width: 17rem;">
                <img src="<?php echo base_url().'/uploads/'.$tk->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $tk->nama_tiket ?></h5>
                    <small><?php echo $tk->info_tanggal ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($tk->harga, 0,',','.') ?></span>
                    <?php echo anchor('Dashboard/tambah_ke_keranjang/'. $tk->id,'<div class="btn btn-sm btn-info mb-3">Masukan ke Keranjang</div>') ?>
                    <?php echo anchor('Dashboard/detail/'. $tk->id,'<div class="btn btn-sm btn-warning">Detail Tiket</div>') ?>

                </div>
            </div>
            
        <?php endforeach; ?>

    </div>

</div>