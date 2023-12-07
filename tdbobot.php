<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Data Bobot
                    <a href="formbobot.php" class="btn btn-primary float-end">Tambah Bobot</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID Bobot</th>
                                    <th>Nama Kriteria</th>
                                    <th>Value</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT b.id_bobot, k.id_kriteria, k.nm_kriteria, b.value FROM tb_bobot b, tb_kriteria k WHERE b.id_kriteria = k.id_kriteria";
                                $bobot_run = mysqli_query($con, $sql);

                                if(mysqli_num_rows($bobot_run) > 0)
                                {
                                    foreach($bobot_run as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['id_bobot'] ?> </td>
                                            <td><?= $item['nm_kriteria'] ?> </td>
                                            <td><?= $item['value'] ?> </td>
                                            <td>
                                                <a href="editbobot.php?id_bobot=<?= $item['id_bobot'] ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <button type="submit" name="bobot_delete" value="<?= $item['id_bobot'] ?>"  class="btn btn-danger">Delete</button>    
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
