<div class="container">
    <h2>Edit Data Bidang Usaha</h2>
    <?php echo form_open("bidang/save"); ?>
    <div class="form-group row">
        <label for="nama_bidang_usaha" class="col-4 col-form-label">Bidang Usaha</label>
        <div class="col-8">
            <input id="nama_bidang_usaha" name="nama_bidang_usaha" type="text" class="form-control" value="<?= $objbidang->nama_bidang_usaha ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    <input type="hidden" name="idbidang" value="<?= $objbidang->id ?>" />
    <?php echo form_close() ?>
</div>