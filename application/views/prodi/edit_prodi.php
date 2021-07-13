<div class="container">
    <h2>Edit Data Prodi</h2>
    <?php echo form_open("prodi/save"); ?>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label> 
            <div class="col-8">
                <input id="kode" name="kode" type="text" class="form-control" value="<?=$objprodi->kode?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_prodi" class="col-4 col-form-label">Nama Prodi</label> 
            <div class="col-8">
                <input id="nama_prodi" name="nama_prodi" type="text" class="form-control" value="<?=$objprodi->nama_prodi?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <input type="hidden" name="idprodi" value="<?=$objprodi->id?>"/>
    <?php echo form_close()?>
</div> 