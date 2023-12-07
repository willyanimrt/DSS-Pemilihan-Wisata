<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Alternatif
                    <a href="tdalternatif.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['idalternatif']))
                    {
                        $id_alternatif = $_GET['idalternatif'];
                        $edit_alternatif = "SELECT * FROM tb_alternatif WHERE idalternatif='$id_alternatif'";
                        $alternatif_run = mysqli_query($con, $edit_alternatif);

                        if(mysqli_num_rows($alternatif_run) > 0)
                        {
                            $row = mysqli_fetch_array($alternatif_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="idalternatif" value="<?= $row['idalternatif'] ?>"></input>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="idalternatif">ID Alternatif</label>
                                        <input type="text" name="idalternatif" value="<?= $row['idalternatif'] ?>" required class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nmalternatif">Nama Alternatif</label>
                                        <input type="text" name="nmalternatif" value="<?= $row['nmalternatif'] ?>" required class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="alternatif_edit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                        else
                        {
                            ?>
                            <h4>No Record Found</h4>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?> 