<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "dbsilokernf";
// Koneksi dan memilih database di server
$conn = mysqli_connect($server,$username,$password,$database) or die("Gagal");

?>
<div class="container">
    <h2>Form Peminat</h2>
    <?php echo form_open("peminat/save"); ?>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_peminat" class="col-4 col-form-label">Nama Peminat</label> 
            <div class="col-8">
                <input id="nama_peminat" name="nama_peminat" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alasan" class="col-4 col-form-label">Alasan</label> 
            <div class="col-8">
                <input id="alasan" name="alasan" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi_id" class="col-4 col-form-label">Prodi</label> 
            <div class="col-8">
                <select name="prodi_id" class="custom-select">
                    <option disabled">-----Pilih------</option>
                    <?php
                    //query menampilkan nama unit kerja ke dalam combobox
                    $query    =mysqli_query($conn, "SELECT * FROM prodi ORDER BY id");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>"><?php echo $data['nama_prodi'];?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="lowongan_id" class="col-4 col-form-label">Deskripsi Pekerjaan</label> 
            <div class="col-8">
                <select name="lowongan_id" class="custom-select">
                    <option disabled">-----Pilih------</option>
                    <?php
                    //query menampilkan nama unit kerja ke dalam combobox
                    $query    =mysqli_query($conn, "SELECT * FROM lowongan ORDER BY id");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>"><?php echo $data['deskripsi_pekerjaan'];?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="keahlian_id" class="col-4 col-form-label">Keahlian</label> 
            <div class="col-8">
                <select name="keahlian_id" class="custom-select">
                    <option disabled">-----Pilih------</option>
                    <?php
                    //query menampilkan nama unit kerja ke dalam combobox
                    $query    =mysqli_query($conn, "SELECT * FROM keahlian ORDER BY id");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>"><?php echo $data['nama_keahlian'];?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    <?php echo form_close()?>
</div> 