<?php
include('includes/header.php');
?>

<div class="container-fluid px-4">
   
    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h4>Data Alternatif
                    <a href="formalternatif.php" class="btn btn-primary float-end">Tambah Alternatif</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="code.php" method="POST">
                    <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID Alternatif</th>
                                    <th>Nama Alternatif</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $sql = "SELECT * FROM tb_alternatif ";
                                $alternatif_run = mysqli_query($con, $sql);

                                if(mysqli_num_rows($alternatif_run) > 0)
                                {
                                    foreach($alternatif_run as $item)
                                    {
                                        ?>
                                        <tr>
                                            <td><?= $item['idalternatif'] ?> </td>
                                            <td><?= $item['nmalternatif'] ?> </td>
                                            <td>
                                                <a href="editalternatif.php?idalternatif=<?= $item['idalternatif'] ?>" class="btn btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <button type="submit" name="alternatif_delete" value="<?= $item['idalternatif'] ?>"  class="btn btn-danger">Delete</button>    
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
