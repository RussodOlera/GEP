<?php require "db_conn.php"?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
        style="background-color: #00ff5573;">
        Elenco utenti:
        </nav>
        <div class="container">
            <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    '.$msg.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                }
            ?>
            <a href="register.php" class="btn btn-dark mb-3" >nuovo utente</a>
            <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Azione</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $sql = mysqli_query($conn, "SELECT * FROM users");
                    while($row = mysqli_fetch_assoc($sql)){
                        ?>
                            <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nome']; ?></td>
                            <td><?php echo $row['cognome']; ?></td>
                            <td><?php echo $row['tel']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                            <a href="user_show.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-user fs-5 me-3"></i></a>
                            <a href="user_update.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                            <a href="user_delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5 "></i></a>
                            </td>
                            </tr>
                        <?php
                    }
                ?>
                
                
            </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </body>
</html>