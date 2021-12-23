<div class="container fluid">

    <div class="row text-center mt-4">

        <?php foreach ($bus as $tk) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url().'/uploads/'.$tk->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $tk->nama_tiket ?></h5>
                    <small><?php echo $tk->info_tanggal ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($tk->harga, 0,',','.') ?></span>
                    <?php echo anchor('Dashboard/tambah_ke_keranjang/'. $tk->id,'<div class="btn btn-sm btn-info">Tambah ke Keranjang</div>') ?>
                    <?php echo anchor('Dashboard/detail/'. $tk->id,'<div class="btn btn-sm btn-success">Detail</div>') ?>

                </div>
            </div>

            

        <?php endforeach; ?>
    </div>
</div>