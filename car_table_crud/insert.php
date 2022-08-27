


<?php
// include db connection
include 'connection.php';

if(isset($_POST['upload'])){
    $MARCA = $_POST['marca'];
    $MODEL = $_POST['model'];
    $PRET = $_POST['pret'];
    $IMAGE = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES ['image']['name'];
    $img_des = 'uploadimage/'.$img_name;
    move_uploaded_file($img_loc,'uploadimage/'.$img_name);

    // insert data

    mysqli_query($con, "INSERT INTO `cars`(`Marca`, `Model`, `Pret`, `Image`) VALUES ('$MARCA','$MODEL','$PRET','$img_des')");

}

    ?>