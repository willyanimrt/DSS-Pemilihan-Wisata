<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Matrix
                    <a href="tdmatrix.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="id_alternatif">ID Alternatif</label>
                                    <select class="form-select" name="id_alternatif" aria-label="Default select example" requierd>
                                        <?php
                                        $query = "SELECT tb_alternatif.* FROM tb_alternatif 
                                        LEFT JOIN tb_penilaian ON tb_alternatif.idalternatif = tb_penilaian.id_alternatif 
                                        WHERE tb_penilaian.id_alternatif IS NULL";
                                        $result = mysqli_query($con, $query);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . $row['idalternatif'] . '">' . $row['idalternatif'] . ': ' . $row['nmalternatif'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div> 

                                <?php
                                $query = "SELECT b.id_bobot, k.nm_kriteria FROM tb_bobot b, tb_kriteria k WHERE b.id_kriteria = k.id_kriteria";
                                $result = mysqli_query($con, $query);

                                while ($rowOuter = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label class="form-label"><?=$rowOuter['nm_kriteria']?></label>
                                    <select class="form-select" name="<?=$rowOuter['id_bobot']?>" aria-label="Default select example" required>
                                    <?php
                                    $queryInner = "SELECT * FROM tb_skala";
                                    $resultInner = mysqli_query($con, $queryInner);

                                    while ($rowInner = mysqli_fetch_assoc($resultInner)) {
                                      echo '<option value="' . $rowInner['id_skala'] . '">' . $rowInner['value'] . ': ' . $rowInner['keterangan'] . '</option>';
                                    }
                                    ?>
                                    </select>
                                  </div>
                                </div>
                                <?php
                                }
                                ?>

                                <!-- <div class="mb-3">
                                    <label for="id_skala">ID Skala</label>
                                    <select class="form-select" name="id_skala" aria-label="Default select example" requierd>
                                        <?php
                                        // $query = "SELECT * FROM tb_skala";
                                        // $result = mysqli_query($con, $query);

                                        // while ($row = mysqli_fetch_assoc($result)) {
                                        // echo '<option value="' . $row['id_skala'] . '">' . $row['id_skala'] . ': ' . $row['keterangan'] . '</option>';
                                        // }
                                        ?>
                                    </select>
                                </div> -->
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="matrix_add" class="btn btn-primary">Simpan</button>
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