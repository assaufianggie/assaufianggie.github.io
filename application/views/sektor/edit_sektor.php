<div class="container">
    <h2>Edit Data Sektor Usaha</h2>
    <?php echo form_open("sektor/save"); ?>
        <div class="form-group row">
            <label for="nama_sektor_usaha" class="col-4 col-form-label">Sektor Usaha</label> 
            <div class="col-8">
                <input id="nama_sektor_usaha" name="nama_sektor_usaha" type="text" class="form-control" value="<?=$objsektor->nama_sektor_usaha?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <input type="hidden" name="idsektor" value="<?=$objsektor->id?>"/>
    <?php echo form_close()?>
</div> 