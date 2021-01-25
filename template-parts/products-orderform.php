<div class="col-md-8 mx-auto order-form position-absolute" id="whatsapp-orderform">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Pemesanan</h4>
        </div>
        
        <div class="card-body">
            <div class="row">
                <form class="col-md-12" action="<?php echo get_template_directory_uri(); ?>/functions/products-whatsapp.php?name=<?php echo get_the_title(); ?>&price=<?php echo get_field('price'); ?>" method="POST">
                    <div class="form-group">
                        <label for="helperText">Nama Lengkap</label>
                        <input type="text" id="helperText" class="form-control" placeholder="Name" name="buyer">
                        <p><small class="text-muted">Contoh : Wahyu Amirulloh</small></p>
                    </div>
                    <div class="form-group">
                        <label for="helperText">Alamat</label>
                        <input type="text" id="helperText" class="form-control" placeholder="Name" name="alamat">
                        <p><small class="text-muted">Contoh : Perumahan bagus Blok A No. 3</small></p>
                    </div>
                    <fieldset class="form-group">
                        <label for="helperText">Metode Pembayaran</label>
                        <select class="form-select" id="basicSelect" name="payment">
                            <option value="Tunai">Tunai</option>
                            <option value="Tranfer Bank">Transfer Bank</option>
                            <option value="Transfer Dompet Digital">Transfer Dompet Digital</option>
                        </select>
                    </fieldset>
                    <input type="text" name="feature" value="<?php echo $feature ?>" hidden>
                    <input type="text" name="nomortelp" value="<?php echo get_theme_mod('wp_contactinfo-contact') ?>" hidden>
                    <input type="text" name="greeting" value="<?php echo get_theme_mod('wp_greetingsorder-text') ?>" hidden>
                    <button type="submit" class="btn btn-outline-success col-12 my-2">Beli Sekarang</a>
                </form>
            </div>
        </div>
    </div>
</div>