<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Topsis Nilai V</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item">Topsis Nilai V</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php');?>
                <div class="card">
                    <div class="card-header">
                        <h4>Topsis Nilai V</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Alternatif</th>
                                    <th>Nama Alternatif</th>
                                    <th>DPlus</th>
                                    <th>DMin</th>
                                    <th>Nilai V</th>
                                    <th>Rangking</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $norangking = 1;
                                $query = "SELECT * FROM topsis_nilaiv ORDER BY nilaiv DESC LIMIT 1000";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row['idalternatif']; ?></td>
                                            <td><?= $row['nmalternatif']; ?></td>
                                            <td><?= $row['dplus']; ?></td>
                                            <td><?= $row['dmin']; ?></td>
                                            <td><?= $row['nilaiv']; ?></td>
                                            <td><?= $norangking++ ?></td>
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