<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Bobot
                    <a href="tdbobot.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id_bobot']))
                    {
                        $idbobot = $_GET['id_bobot'];
                        $edit_bobot = "SELECT * FROM tb_bobot WHERE id_bobot='$idbobot'";
                        $bobot_run = mysqli_query($con, $edit_bobot);

                        if(mysqli_num_rows($bobot_run) > 0)
                        {
                            $row = mysqli_fetch_array($bobot_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id_bobot" value="<?= $row['id_bobot'] ?>"></input>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="id_bobot">ID Bobot</label>
                                        <input type="text" name="id_bobot" value="<?= $row['id_bobot'] ?>" required class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_kriteria">ID Kriteria</label>
                                        <select name="id_kriteria" class="form-select">
                                        
                                            <?php
                                            $kriteria_query = "SELECT b.id_bobot, k.id_kriteria, k.nm_kriteria, b.value FROM tb_bobot b, tb_kriteria k WHERE b.id_kriteria = k.id_kriteria";
                                            $kriteria_query_run = mysqli_query($con, $kriteria_query);

                                            while ($kriteria_row = mysqli_fetch_assoc($kriteria_query_run)) {
                                                $selected = ($row['id_kriteria'] == $kriteria_row['id_kriteria']) ? "selected": "";
                                                ?>
                                                <option value="<?= $kriteria_row['id_kriteria']; ?>" <?= $selected; ?>>
                                                    <?= $kriteria_row['id_kriteria'] . ': ' . $kriteria_row['nm_kriteria'];?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="value">Value</label>
                                        <input type="text" name="value" value="<?= $row['value'] ?>" required class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="bobot_edit" class="btn btn-primary">Update</button>
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