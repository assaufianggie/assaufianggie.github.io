<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "dbsilokernf";
// Koneksi dan memilih database di server
$conn = mysqli_connect($server,$username,$password,$database) or die("Gagal");

?>

<div class="container">
    <h1>Form Mitra</h1>
    <?php echo form_open("mitra/save"); ?>
    <div class="form-group row">
        <label for="nama_mitra" class="col-4 col-form-label">Nama Perusahaan</label> 
        <div class="col-8">
        <input id="nama_mitra" name="nama_mitra" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamat" class="col-4 col-form-label">Alamat</label> 
        <div class="col-8">
        <input id="alamat" name="alamat" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="kontak" class="col-4 col-form-label">Nama Kontak</label> 
        <div class="col-8">
        <input id="kontak" name="kontak" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="telpon" class="col-4 col-form-label">No. Telepon</label> 
        <div class="col-8">
        <input id="telpon" name="telpon" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <input id="email" name="email" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="web" class="col-4 col-form-label">Website</label> 
        <div class="col-8">
        <input id="web" name="web" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="bidang_usaha_id" class="col-4 col-form-label">Bidang Usaha</label> 
        <div class="col-8">
            <select id="bidang_usaha_id" name="bidang_usaha_id" class="custom-select">
                <option disabled">-----Pilih------</option>   
                <?php
                    //query menampilkan nama bidang ke dalam combobox
                    $query    =mysqli_query($conn, "SELECT * FROM bidang_usaha ORDER BY id");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id'];?>"><?php echo $data['nama_bidang_usaha'];?></option>
                    <?php
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="sektor_usaha_id" class="col-4 col-form-label">Sektor Usaha</label> 
        <div class="col-8">
        <select id="sektor_usaha_id" name="sektor_usaha_id" class="custom-select">
            <option disabled">-----Pilih------</option>
             <?php
                // include "koneksi.php";
                //query menampilkan nama sektor ke dalam combobox
                $query    =mysqli_query($conn, "SELECT * FROM sektor_usaha ORDER BY id");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['id'];?>"><?php echo $data['nama_sektor_usaha'];?></option>
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