<div class="col-md-12">
    <div class="container p-2 ">
        <div class="row">
            <div class="col-10">
                <h2>
                    Daftar Lowongan
                </h2>
            </div>
            <div class="col-2 mt-1">
                <?php echo '<a href="' . base_url() . 'index.php/lowongan/create/" class="btn btn-primary btn-block active" role="button" aria-pressed="true">Tambah Data</a>' ?>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Deskripsi Pekerjaan</th>
                <th>Tanggal Akhir</th>
                <th>Mitra</th>
                <th>Email</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>


            <!-- $num = 1;
        foreach($list_lowongan->result() as $row) {
            
            echo '<tr><td>'.$num.'</td>';
            echo '<td>'.$row->deskripsi_pekerjaan.'</td>';
            echo '<td>'.$row->tanggal_akhir.'</td>';
            echo '<td>'.$row->mitra_id.'</td>';
            echo '<td>'.$row->email.'</td>';
            echo '<td>
                    <a href="" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                    <a href="" class="btn btn-danger btn-sm active" role="button" aria-pressed="true" 
                    onclick="return hapusDosen(\'Data Dosen' .$row->nama.' Yakin Mau dihapus ? \')">Hapus</a>
                </td>';         
            echo '</tr>';
            $num++;
        }  -->
            <?php
            $nomor = 1;
            foreach ($list_lowongan->result() as $row) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $row->id . '</td>';
                echo '<td>' . $row->deskripsi_pekerjaan . '</td>';
                echo '<td>' . $row->tanggal_akhir . '</td>';
                echo '<td>' . $row->nama_mitra . '</td>';
                echo '<td>' . $row->email . '</td>';
                echo '<td>
                <a href="' . base_url() . 'index.php/lowongan/edit/' . $row->id . '" class="btn btn-primary btn-sm btn-block active" role="button" aria-pressed="true">Edit</a>
                <a href="' . base_url() . 'index.php/lowongan/delete/' . $row->id . '" class="btn btn-danger btn-sm btn-block active" role="button" aria-pressed="true" 
                onclick="return hapusLowongan(\'Data lowongan ini yakin mau dihapus ? \')">Hapus</a>
                <td/>';
                echo '</tr>';
                $nomor++;
            } ?>
        </tbody>
    </table>
</div>

<script>
    function hapusLowongan(pesan) {
        if (confirm(pesan)) {
            return true;
        } else {
            return false;
        }
    }
</script>