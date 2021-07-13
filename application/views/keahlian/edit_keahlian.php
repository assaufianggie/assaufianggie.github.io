<div class="container">
    <h2>Edit Data Keahlian</h2>
    <?php echo form_open("keahlian/save"); ?>
        <div class="form-group row">
            <label for="nama_keahlian" class="col-4 col-form-label">Nama Keahlian</label> 
            <div class="col-8">
                <input id="nama_keahlian" name="nama_keahlian" type="text" class="form-control" value="<?=$objkeahlian->nama_keahlian?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <input type="hidden" name="idkeahlian" value="<?=$objkeahlian->id?>"/>
    <?php echo form_close()?>
</div> 