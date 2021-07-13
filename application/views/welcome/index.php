<!-- <div class="container">
    <div class="jumbotron">
        <h1 style="font-size:50px;">Selamat Datang</h1>
        <p style="font-size:25px;">Pilih Menu di Samping </p>
    </div>
</div> -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">My Profile</h1> -->

    <div class="jumbotron shadow" style="color: #ffffff;background-color: #73C2FB;">
        <h1 style="font-size:50px;">Selamat Datang</h1>
        <p style="font-size:25px;">Admin SILOKERNF</p>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body" style="color: #808588;">
                        <h5 class="card-title"><?= $user['name']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Admin since <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->