<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
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
            <input type="submit" name="admin_login" value="Admin Login">
            <input type="submit" name="student_login" value="Student Login">

        </form>
        <?php
            if(isset($_POST['admin_login'])){
                header("Location:admin_login.php");
            }
            if(isset($_POST['student_login'])){
                header("Location:student_login.php");
            }

        ?>
    </center>

</body>
</html>
