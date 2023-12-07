<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Topsis MaxMin</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Topsis MaxMin</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php');?>
                <div class="card">
                    <div class="card-header">
                        <h4>Topsis MaxMin</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID Matrix</th>
                                    <th>ID Kriteria</th>
                                    <th>Nama Kriteria</th>
                                    <th>Maximum</th>
                                    <th>Minimum</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM topsis_maxmin";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $row['id_nilai']; ?></td>
                                            <td><?= $row['id_kriteria']; ?></td>
                                            <td><?= $row['nm_kriteria']; ?></td>
                                            <td><?= $row['maximum']; ?></td>
                                            <td><?= $row['minimum']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="5">No record found</td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>