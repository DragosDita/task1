<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />




    <link rel="stylesheet" href="style.css">
    <title>Car</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="#">Just to fill some area</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<body class="bg-light">

    <center>

        <div class="border d-flex align-items-center justify-content-center bg-light" style="height: 350px;">

            <form action=" insert.php" method="POST" enctype="multipart/form-data">
                <h3>Insert Car Details</h3>
                <label for="" class="text-center m-1">Marca:</label>
                <input type="text" name="marca"><br>
                <label for="" class="text-center m-1">Model:</label>
                <input type="text" name="model" id=""><br>
                <label for="" class="text-center m-1">Pret:</label>
                <input type="text" name="pret" id=""><br>
                <label for="" class="text-center m-1">Image:</label>
                <input type="file" name="image" id=""><br>
                <button name="upload" class="btn btn-success m-3">Upload</button>
                </br>

            </form>
        </div>
    </center>

    <!-- fetch data -->
    </br>

    <div class=" container">
        <table class="table align-middle mb-0 bg-light table-bordered border-">
            <thead>
                <tr class="table-dark ">
                    <th scope="col" class='text-center'>Id</th>
                    <th scope="col" class='text-center'>Marca</th>
                    <th scope="col" class='text-center'>Model</th>
                    <th scope="col" class='text-center'>Pret</th>
                    <th scope="col" class='text-center'>Imagine</th>
                    <th scope="col" class='text-center'>Delete</th>
                    <th scope="col" class='text-center'>Update</th>


                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $pic = mysqli_query($con, "SELECT * FROM `cars`");
                while ($row = mysqli_fetch_array($pic)) {
                    echo "
                <tr>
                    <td class='text-center'>$row[id]</td>
                    <td class='text-center'>$row[Marca]</td>
                    <td class='text-center'>$row[Model]</td>
                    <td class='text-center'>$row[Pret]</td>
                    <td class='text-center'><img src='$row[Image]'class='img-fluid' width= '200px' height='200px' alt='no photo'></td>
                    <td class='text-center'><a href='delete.php? Id= $row[id]' class = 'text-center btn btn-danger'>Delete</a></td>
                    <td class='text-center'><a href='update.php? Id= $row[id]' class = ' btn btn-success'>Update</a></td>
                </tr>
                ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr class="hr" />

</body>

</html>