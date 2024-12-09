<!DOCTYPE html>
<html>
    <head>
        <title>Student Login Page</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">

</head>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php"><img class="logo" src ="images/logo.PNG" alt="logo..."></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
        <a class="nav-link" href="about.html">About Us</a>
        <a class="nav-link" href="contact.php">Contact Us</a>
        <!-- <a class="nav-link" href="#">Link</a> -->
      </li>
    </ul>
    
  </div>
</nav>

<body>
    <center>
        <br><h2>University Dormitory Management System</h2><br>
        <form action="" method="post">
            Email:<input type="text" name="email" required><br><br>
            Password:<input type="password" name="password" required><br><br>
            <input type="submit" name="submit">

            


        </form>
        <?php
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"udms");
                $query = "SELECT * FROM student where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email'] == $_POST['email']){
                        if($row['password'] == $_POST['password']){
                            header("Location: student_dashboard.php");
                            
                        }
                        else{
                            echo "wrong pass";
                        }
                    }
                    else{
                        echo "Wrong email";
                    }
                }
            }
        
        ?>
        
    </center>

</body>
</html>
