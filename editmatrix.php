<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Edit Matrix
                    <a href="tdmatrix.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id_nilai']))
                    {
                        $idmatrix = $_GET['id_nilai'];
                        $edit_matrix = "SELECT * FROM tb_penilaian WHERE id_nilai='$idmatrix'";
                        $matrix_run = mysqli_query($con, $edit_matrix);

                        if(mysqli_num_rows($matrix_run) > 0)
                        {
                            $row = mysqli_fetch_array($matrix_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="id_nilai" value="<?= $row['id_nilai'] ?>"></input>
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="id_nilai">ID Matrix</label>
                                        <input type="text" name="id_nilai" value="<?= $row['id_nilai'] ?>" required class="form-control" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_alternatif">ID Alternatif</label>
                                        <select name="id_alternatif" class="form-select">
                                        
                                            <?php
                                            // Replace 'your_alternative_query' with the actual query to fetch alternative data
                                            $alternatif_query = "SELECT * FROM tb_alternatif";
                                            $alternatif_query_run = mysqli_query($con, $alternatif_query);

                                            while ($alternatif_row = mysqli_fetch_assoc($alternatif_query_run)) {
                                                $selected = ($row['id_alternatif'] == $alternatif_row['idalternatif']) ? "selected" : "";
                                                ?>
                                                <option value="<?= $alternatif_row['idalternatif']; ?>" <?= $selected; ?>>
                                                    <?= $alternatif_row['idalternatif'] . ': ' . $alternatif_row['nmalternatif']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_bobot">ID Bobot</label>
                                        <select name="id_bobot" class="form-select">
                                        
                                            <?php
                                            $view_query = "SELECT b.id_bobot, k.id_kriteria, k.nm_kriteria, b.value FROM tb_bobot b, tb_kriteria k WHERE b.id_kriteria = k.id_kriteria";
                                            $view_query_run = mysqli_query($con, $view_query);

                                            while ($view_row = mysqli_fetch_assoc($view_query_run)) {
                                                $selected = ($row['id_bobot'] == $view_row['id_bobot']) ? "selected" : "";
                                                ?>
                                                <option value="<?= $view_row['id_bobot']; ?>" <?= $selected; ?>>
                                                    <?= $view_row['id_kriteria'] . ': ' . $view_row['nm_kriteria']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_skala">ID Skala</label>
                                        <select name="id_skala" class="form-select">
                            
                                            <?php
                                            $skala_query = "SELECT * FROM tb_skala";
                                            $skala_query_run = mysqli_query($con, $skala_query);

                                            while ($skala_row = mysqli_fetch_assoc($skala_query_run)) {
                                                $selected = ($row['id_skala'] == $skala_row['value']) ? "selected" : "";
                                                ?>
                                                <option value="<?= $skala_row['id_skala']; ?>" <?= $selected; ?>>
                                                    <?= $skala_row['id_skala'] . ': ' . $skala_row['keterangan']; ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="matrix_edit" class="btn btn-primary">Update</button>
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