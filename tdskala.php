<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Data Skala
                    <a href="formskala.php" class="btn btn-primary float-end">Tambah Skala</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID Skala</th>
                                    <th>Value</th>
                                    <th>Keterangan</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM tb_skala";
                                $skala_run = mysqli_query($con, $sql);

                                if(mysqli_num_rows($skala_run) > 0)
                                {
                                    foreach($skala_run as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id_skala'] ?> </td>
                                            <td><?= $item['value'] ?> </td>
                                            <td><?= $item['keterangan'] ?> </td>
                                            <td>
                                                <a href="editskala.php?id_skala=<?= $item['id_skala'] ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <button type="submit" name="skala_delete" value="<?= $item['id_skala'] ?>"  class="btn btn-danger">Delete</button>    
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
