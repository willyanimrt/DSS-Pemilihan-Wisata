<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Alternatif
                    <a href="tdalternatif.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                            <div class="row">
                                <!-- <div class="mb-3">
                                    <label for="idalternatif">ID Alternatif</label>
                                    <input type="text" name="idalternatif" required class="form-control">
                                </div> -->
                                <div class="mb-3">
                                    <label for="nmalternatif">Nama Alternatif</label>
                                    <input type="text" name="nmalternatif" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="alternatif_add" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>