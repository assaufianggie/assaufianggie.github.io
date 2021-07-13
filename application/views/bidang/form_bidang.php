<div class="container">
    <h2>Form Bidang Usaha</h2>
    <?php echo form_open("bidang/save"); ?>
        <div class="form-group row">
            <label for="nama_bidang_usaha" class="col-4 col-form-label">Bidang Usaha</label> 
            <div class="col-8">
                <input id="nama_bidang_usaha" name="nama_bidang_usaha" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    <?php echo form_close()?>
</div> 