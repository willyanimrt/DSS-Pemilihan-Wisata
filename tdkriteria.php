<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Data Kriteria
                    <a href="formkriteria.php" class="btn btn-primary float-end">Tambah Kriteria</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID Kriteria</th>
                                    <th>Nama Kriteria</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM tb_kriteria ";
                                $kriteria_run = mysqli_query($con, $sql);

                                if(mysqli_num_rows($kriteria_run) > 0)
                                {
                                    foreach($kriteria_run as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id_kriteria'] ?> </td>
                                            <td><?= $item['nm_kriteria'] ?> </td>
                                            <td>
                                                <a href="editkriteria.php?id_kriteria=<?= $item['id_kriteria'] ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <button type="submit" name="kriteria_delete" value="<?= $item['id_kriteria'] ?>"  class="btn btn-danger">Delete</button>    
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
