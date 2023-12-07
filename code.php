<?php
include('config/dbcon.php');

//Data Alternatif
if(isset($_POST['alternatif_add']))
{
    echo "gagal";
    $nmalternatif = $_POST['nmalternatif'];

    $query = "INSERT INTO tb_alternatif (nmalternatif) VALUES ('$nmalternatif')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Alternatif Added Successfully";
        header('Location: tdalternatif.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdalternatif.php');
        exit(0);
    }
}

if(isset($_POST['alternatif_edit']))
{
    $idalternatif = $_POST['idalternatif'];
    $nmalternatif = $_POST['nmalternatif'];

    $query = "UPDATE tb_alternatif SET nmalternatif='$nmalternatif' WHERE idalternatif='$idalternatif' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Alternatif Updated Successfully";
        header('Location: tdalternatif.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: editalternatif.php?id='.$idalternatif);
        exit(0);
    }
}

if(isset($_POST['alternatif_delete']))
{
    $id_alternatif = $_POST['alternatif_delete'];

    $query = "DELETE FROM tb_alternatif WHERE idalternatif='$id_alternatif' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Alternatif Deleted Sucessfully";
        header('Location: tdalternatif.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdalternatif.php');
        exit(0);
    }
}

//Data Kriteria
if(isset($_POST['kriteria_add']))
{
    echo "gagal";
    $nm_kriteria = $_POST['nm_kriteria'];

    $query = "INSERT INTO tb_kriteria (nm_kriteria) VALUES ('$nm_kriteria')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Kriteria Added Successfully";
        header('Location: tdkriteria.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdkriteria.php');
        exit(0);
    }
}

if(isset($_POST['kriteria_edit']))
{
    $id_kriteria = $_POST['id_kriteria'];
    $nm_kriteria = $_POST['nm_kriteria'];

    $query = "UPDATE tb_kriteria SET nm_kriteria='$nm_kriteria' WHERE id_kriteria='$id_kriteria' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Kriteria Updated Successfully";
        header('Location: tdkriteria.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: editkriteria.php?id='.$id_kriteria);
        exit(0);
    }
}

if(isset($_POST['kriteria_delete']))
{
    $idkriteria = $_POST['kriteria_delete'];

    $query = "DELETE FROM tb_kriteria WHERE id_kriteria='$idkriteria' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Kriteria Deleted Sucessfully";
        header('Location: tdkriteria.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdkriteria.php');
        exit(0);
    }
}

// Data Bobot
if(isset($_POST['bobot_add']))
{
    echo "gagal";
    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    $query = "INSERT INTO tb_bobot (id_kriteria, value) VALUES ('$id_kriteria','$value')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Bobot Added Successfully";
        header('Location: tdbobot.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdbobot.php');
        exit(0);
    }
}

if(isset($_POST['bobot_edit']))
{
    $id_bobot = $_POST['id_bobot'];
    $id_kriteria = $_POST['id_kriteria'];
    $value = $_POST['value'];

    $query = "UPDATE tb_bobot SET id_kriteria='$id_kriteria', value='$value' WHERE id_bobot='$id_bobot' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Bobot Updated Successfully";
        header('Location: tdbobot.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: editbobot.php?id='.$id_bobot);
        exit(0);
    }
}

if(isset($_POST['bobot_delete']))
{
    $idbobot = $_POST['bobot_delete'];

    $query = "DELETE FROM tb_bobot WHERE id_bobot='$idbobot' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Bobot Deleted Sucessfully";
        header('Location: tdbobot.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdbobot.php');
        exit(0);
    }
}

// Data Skala
if(isset($_POST['skala_add']))
{
    echo "gagal";
    $value = $_POST['value'];
    $keterangan = $_POST['keterangan'];

    $query = "INSERT INTO tb_skala (value, keterangan) VALUES ('$value','$keterangan')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Skala Added Successfully";
        header('Location: tdskala.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdskala.php');
        exit(0);
    }
}

if(isset($_POST['skala_edit']))
{
    $id_skala = $_POST['id_skala'];
    $value = $_POST['value'];
    $keterangan = $_POST['keterangan'];

    $query = "UPDATE tb_skala SET value='$value', keterangan='$keterangan' WHERE id_skala='$id_skala' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Skala Updated Successfully";
        header('Location: tdskala.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: editskala.php?id='.$id_skala);
        exit(0);
    }
}

if(isset($_POST['skala_delete']))
{
    $idskala = $_POST['skala_delete'];

    $query = "DELETE FROM tb_skala WHERE id_skala='$idskala' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Skala Deleted Sucessfully";
        header('Location: tdskala.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdskala.php');
        exit(0);
    }
}

// Data Matrix
if(isset($_POST['matrix_add'])){
    $id_alternatif = $_POST['id_alternatif'];
    $query = "SELECT b.id_bobot, k.nm_kriteria FROM tb_bobot b, tb_kriteria k WHERE b.id_kriteria = k.id_kriteria";
    $result = mysqli_query($con, $query);

    while ($rowOuter = mysqli_fetch_assoc($result)) {
        $id_bobot = $rowOuter['id_bobot'];
        $id_skala = $_POST[$id_bobot];
        $queryInsert = "INSERT INTO tb_penilaian (id_alternatif, id_bobot, id_skala) VALUES ('$id_alternatif', '$id_bobot', '$id_skala')";
        mysqli_query($con, $queryInsert);
    }

    if($rowOuter)
    {
        $_SESSION['message'] = "Matrix Added Successfully";
        header('Location: tdmatrix.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdmatrix.php');
        exit(0);
    }
}
// if(isset($_POST['matrix_add']))
// {
//     echo "gagal";
//     $id_alternatif = $_POST['id_alternatif'];
//     $id_bobot = $_POST['id_bobot'];
//     $id_skala = $_POST['id_skala'];

//     $query = "INSERT INTO tb_penilaian (id_alternatif, id_bobot, id_skala) VALUES ('$id_alternatif','$id_bobot','$id_skala')";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Matrix Added Successfully";
//         header('Location: tdmatrix.php');
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Something Went Wrong!";
//         header('Location: tdmatrix.php');
//         exit(0);
//     }
// }

if(isset($_POST['matrix_edit']))
{
    $id_matrix = $_POST['id_nilai'];
    $id_alternatif = $_POST['id_alternatif'];
    $id_bobot = $_POST['id_bobot'];
    $id_skala = $_POST['id_skala'];

    $query = "UPDATE tb_penilaian SET id_alternatif='$id_alternatif', id_bobot='$id_bobot', id_skala='$id_skala' WHERE id_nilai='$id_matrix' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Matrix Updated Successfully";
        header('Location: tdmatrix.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: editmatrix.php?id='.$id_matrix);
        exit(0);
    }
}

if(isset($_POST['matrix_delete']))
{
    $idmatrix = $_POST['matrix_delete'];

    $query = "DELETE FROM tb_penilaian WHERE id_nilai='$idmatrix' ";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Skala Deleted Sucessfully";
        header('Location: tdmatrix.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something Went Wrong!";
        header('Location: tdmatrix.php');
        exit(0);
    }
}

// if(isset($_POST['add_user']))
// {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role_as = $_POST['role_as'];
//     $status = $_POST['status'] == true ? '1' : '0';

//     $query = "INSERT INTO users (fname,lname,email,password,role_as,status) VALUES ('$fname','$lname','$email','$password','$role_as','$status')";
//     $query_run = mysqli_query($con,$query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Admin/User Added Sucessfully";
//         header('Location: view-register.php');
//         exit(0);
//     }
//     else
//     {
//         $_SESSION['message'] = "Something Went Wrong!";
//         header('Location: view-register.php');
//         exit(0);
//     }
// }

// if(isset($_POST['update_user']))
// {
//     $user_id = $_POST['user_id'];
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $role_as = $_POST['role_as'];
//     $status = $_POST['status'] == true ? '1' : '0';

//     $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',password='$password',role_as='$role_as',status='$status'
//                 WHERE id= '$user_id' ";
//     $query_run = mysqli_query($con,$query);

//     if($query_run)
//     {
//         $_SESSION['message'] = "Updated Sucessfully";
//         header('Location: view-register.php');
//         exit(0);
//     }
// }
?>