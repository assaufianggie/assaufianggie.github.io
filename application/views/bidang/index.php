<div class="col-md-12">
    <div class="container p-2 ">
        <div class="row">
            <div class="col-10">
            <h2>
                Daftar Bidang Usaha
            </h2>
            </div>
            <div class="col-2 mt-1">
                <?php echo '<a href="'.base_url().'index.php/bidang/create/" class="btn btn-primary btn-block active" role="button" aria-pressed="true">Tambah Data</a>'?>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Bidang Usaha</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor=1;
            foreach ($list_bidang->result() as $row) {
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$row->id.'</td>';
                echo '<td>'.$row->nama_bidang_usaha.'</td>';
                echo '<td>
                <a href="'.base_url().'index.php/bidang/edit/'.$row->id.'" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                <a href="'.base_url().'index.php/bidang/delete/'.$row->id.'" class="btn btn-danger btn-sm active" role="button" aria-pressed="true" 
                onclick="return hapusBidang(\'Data bidang usaha ini yakin mau dihapus ? \')">Hapus</a>
                <td/>';
                echo '</tr>';
                $nomor++;
            } ?>
        </tbody>
    </table>
</div>

<script>
    function hapusBidang(pesan){
        if (confirm(pesan)){
            return true;
        }
        else{
            return false;
        }
    }
</script>