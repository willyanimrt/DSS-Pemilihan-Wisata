<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Bobot
                    <a href="tdbobot.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                <form action="code.php" method="POST">
                            <div class="row">
                                <div class="mb-3">
                                    <label for="id_kriteria">ID Kriteria</label>
                                    <!-- <input type="text" name="id_kriteria" required class="form-control"> -->
                                    <select class="form-select" name="id_kriteria" aria-label="Default select example" requierd>
                                    <?php
                                    $query = "SELECT * FROM tb_kriteria";
                                    $result = mysqli_query($con, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<option value="' . $row['id_kriteria'] . '">' . $row['id_kriteria'] . ': ' . $row['nm_kriteria'] . '</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="value">Value</label>
                                    <input type="text" name="value" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" name="bobot_add" class="btn btn-primary">Simpan</button>
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