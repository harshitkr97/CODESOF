    <?php

            include('includes/connection.php');
            if(isset($_POST['userRegistration'])){
                $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[Mobile])";

                $query_run = mysqli_query($connection,$query);
                if($query_run){
                    echo"<script type='text/javascript'>
                    alert('User registered successfully....');
                    window.location.href = 'index.php';
                    </script>
                    ";
                }
                else{
                    echo "<script type='text/javascript'>
                    alert('Error.... plz try again.');
                    window.location.href = 'register.php';
                    </script>
                    ";
                }
            }
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Register Page</title>

            <!-- jQuery file -->

            <script src="includes/juqery_latest.js"></script>

            <!-- bootstrap file -->
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
            <script src="bootstrap/js/bootstrap.min.js"></script> 

            <!-- External css file -->
            <link rel="stylesheet" type="text/css" href="css/style.css">

        </head>
        <body>
            
        <div class="row">
                <div class="col-md-3 m-auto" id="register_home_page">
                    <center><h3>User Registration</h3></center>
                    <form action="" method="post">
                        <div clas="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                        </div>
                        <div clas="form-group">
                            <input type="email" name="email" class="form-control" placeholder="enter email" required>
                        </div>
                        <div clas="form-group">
                            <input type="password" name="password" class="form-control" placeholder="enter password" required>
                        </div>
                        <div clas="form-group">
                            <input type="text" name="Mobile" class="form-control" placeholder="Enter your Mobile No." required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="userRegistration" value="Register" class="btn btn-warning">
                        </div>
                    </form>
                    <center><a href="index.php" class="btn btn-danger">Go to Home</a></center>
                </div>
        </div>

        </body>
        </html>
    