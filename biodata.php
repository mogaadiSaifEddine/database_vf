
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </head>


    <body style="background-image: url(img.jpg);">
    <div class="container">
    <a href="index.php"><button type="button" class="btn btn-primary btn-lg" >Add Data</button></a>
    </div>
    <div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
               
				    <th scope="col">password</th>
              
            </tr>
            <?php 
                include_once"config.php";
                $sql=mysqli_query($conn,"SELECT * FROM details");

                while($row=mysqli_fetch_assoc($sql)){

           ?>

        </thead>
        <tbody>
            <tr>
                <td><?=$row["first_name"] ?></td>
                <td><?=$row["last_name"] ?></td>
                <td><?=$row["email"] ?></td>
                <td><?=$row["phone"] ?></td>
             
				 <td><?=$row["password"] ?></td>
				
           
                
            </tr>
            <?php 
                }
            ?>
           
        </tbody>
    </table>
    </div>
    </body>

</html>

