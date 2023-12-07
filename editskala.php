<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Skala
                    <a href="tdskala.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id_skala']))
                    {
                        $idskala = $_GET['id_skala'];
                        $edit_skala = "SELECT * FROM tb_skala WHERE id_skala='$idskala'";
                        $skala_run = mysqli_query($con, $edit_skala);

                        if(mysqli_num_rows($skala_run) > 0)
                        {
                            $row = mysqli_fetch_array($skala_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id_skala" value="<?= $row['id_skala'] ?>"></input>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="id_skala">ID Skala</label>
                                        <input type="text" name="id_skala" value="<?= $row['id_skala'] ?>" required class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="value">Value</label>
                                        <input type="text" name="value" value="<?= $row['value'] ?>" required class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" value="<?= $row['keterangan'] ?>" required class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="skala_edit" class="btn btn-primary">Update</button>
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