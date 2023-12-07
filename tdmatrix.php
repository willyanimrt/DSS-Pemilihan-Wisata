<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Data Matrix
                    <a href="formmatrix.php" class="btn btn-primary float-end">Tambah Matrix</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID Matrix</th>
                                    <th>Nama Alternatif</th>
                                    <th>Nama Kriteria</th>
                                    <th>V. Bobot</th>
                                    <th>Keterangan</th>
                                    <th>V. Skala</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT p.id_nilai, a.nmalternatif, k.nm_kriteria, b.value AS value_bobot, s.keterangan, s.value AS value_skala,p.id_alternatif, p.id_bobot, p.id_skala
                                FROM tb_penilaian p
                                JOIN tb_alternatif a ON p.id_alternatif = a.idalternatif
                                JOIN tb_bobot b ON p.id_bobot = b.id_bobot
                                JOIN tb_kriteria k ON b.id_kriteria = k.id_kriteria
                                JOIN tb_skala s ON p.id_skala = s.id_skala
                                GROUP BY p.id_nilai";
                                $matrix_run = mysqli_query($con, $sql);

                                if(mysqli_num_rows($matrix_run) > 0)
                                {
                                    foreach($matrix_run as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id_nilai'] ?> </td>
                                            <td><?= $item['nmalternatif'] ?> </td>
                                            <td><?= $item['nm_kriteria'] ?> </td>
                                            <td><?= $item['value_bobot'] ?> </td>
                                            <td><?= $item['keterangan'] ?> </td>
                                            <td><?= $item['value_skala'] ?> </td>
                                            <td>
                                                <a href="editmatrix.php?id_nilai=<?= $item['id_nilai'] ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <button type="submit" name="matrix_delete" value="<?= $item['id_nilai'] ?>"  class="btn btn-danger">Delete</button>    
                                            </td>
                                        </tr>
                                        
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td> 
                                        </tr>
                                    <?php
                                }
                                
                                ?>
                            </tbody>
                        </table>
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
