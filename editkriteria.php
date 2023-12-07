<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Kriteria
                    <a href="tdkriteria.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id_kriteria']))
                    {
                        $idkriteria = $_GET['id_kriteria'];
                        $edit_kriteria = "SELECT * FROM tb_kriteria WHERE id_kriteria='$idkriteria'";
                        $kriteria_run = mysqli_query($con, $edit_kriteria);

                        if(mysqli_num_rows($kriteria_run) > 0)
                        {
                            $row = mysqli_fetch_array($kriteria_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id_kriteria" value="<?= $row['id_kriteria'] ?>"></input>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="id_kriteria">ID Kriteria</label>
                                        <input type="text" name="id_kriteria" value="<?= $row['id_kriteria'] ?>" required class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nm_kriteria">Nama Kriteria</label>
                                        <input type="text" name="nm_kriteria" value="<?= $row['nm_kriteria'] ?>" required class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="kriteria_edit" class="btn btn-primary">Update</button>
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