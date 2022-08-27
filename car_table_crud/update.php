<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <style></style>
    <title>Update</title>
</head>

<body>
    </br>
    </br>

    <?php
    include 'connection.php';
    $ID = $_GET['Id'];
    $Record = mysqli_query($con, "SELECT * FROM `cars` WHERE Id= $ID");
    $data = mysqli_fetch_array($Record);

    ?>



            <center>
        <div class="main">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <label for="">Marca:</label>
                <input type="text" value="<?php echo $data['Marca'] ?>" name="marca"><br>
                <label for="">Model:</label>
                <input type="text" value="<?php echo $data['Model'] ?>" name="model" id=""><br>
                <label for="">Pret:</label>
                <input type="text" value="<?php echo $data['Pret'] ?>" name="pret" id=""><br>
                <label for="">Image:</label>
                <td><input type="file" name="image" value="<?php echo $data['Image'] ?>"><img src="<?php echo $data['Image'] ?>" class='img-fluid' width='200px' height='200px' alt='no photo'></td></br>
                <input type="hidden" value="<?php echo $data['id']?>">
                <button name="upload" class="btn btn-success m-3">Upload</button>

            </form>
        </div>
            </center>

    <!-- update code -->




</body>

</html>