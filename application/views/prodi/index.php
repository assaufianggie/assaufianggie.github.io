<div class="col-md-12">
    <div class="container p-2 ">
        <div class="row">
            <div class="col-10">
            <h2>
                Daftar Prodi
            </h2>
            </div>
            <div class="col-2 mt-1">
                <?php echo '<a href="'.base_url().'index.php/prodi/create/" class="btn btn-primary btn-block active" role="button" aria-pressed="true">Tambah Data</a>'?>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama Prodi</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor=1;
            foreach ($list_prodi->result() as $row) {
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$row->id.'</td>';
                echo '<td>'.$row->kode.'</td>';
                echo '<td>'.$row->nama_prodi.'</td>';
                echo '<td>
                <a href="'.base_url().'index.php/prodi/edit/'.$row->id.'" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                <a href="'.base_url().'index.php/prodi/delete/'.$row->id.'" class="btn btn-danger btn-sm active" role="button" aria-pressed="true" 
                onclick="return hapusProdi(\'Data prodi ini yakin mau dihapus ? \')">Hapus</a>
                <td/>';
                echo '</tr>';
                $nomor++;
            } ?>
        </tbody>
    </table>
</div>

<script>
    function hapusProdi(pesan){
        if (confirm(pesan)){
            return true;
        }
        else{
            return false;
        }
    }
</script>