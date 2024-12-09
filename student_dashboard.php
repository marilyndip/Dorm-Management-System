<!DOCTYPE html>
  <head>
    <title>Student Dashboard</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="style.css">
      <style type="text/css">
          #header{
              height:18%;
              width:100%;
              background-color: whitesmoke;
              position: fixed;
              color: #000;
              
          }
          #left_side{
              height:75%;
              width:15%;
              top: 28%;
              position: fixed;

          }
          #right_side{
              height: 71%;
              width:82.5%;
              background-color:transparent;
              position: fixed;
              left:17%;
              top:28%;
              color:black;
              border-top:solid 1px black;
              border-bottom:solid 1px black;

          }
          #top_span{
              top:18%;
              width:80%;
              left:17%;
              position: fixed;
              color:red;

          }

      
      </style>
      <?php
          session_start();
          $connection = mysqli_connect("localhost","root","");
          $db = mysqli_select_db($connection,"udms");

      ?>

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
      <div id="header">
          <center><h1>University Dormitory Management System</h1><br>
          Email: <?php echo $_SESSION['email']?> &nbsp;&nbsp;Name:<?php echo $_SESSION['name']?>&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="logout.php">Logout</a>
        </center>
      </div>
      <span id="top_span"><b><br><marquee>This portal is open for your service 24/7.</br></b></marquee></span>
          <form action="" method="post">

      <div id="left_side">
              <center>
              <table>
                  <tr>
                      <td>
                        <br>
                          <input type="submit" name="search_student" value="View Details">
        </br>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <input type="submit" name="edit_student" value="  Edit Details  ">
                      </td>
                  </tr>
                  
              </table>
            </center>
          </form>
      </div>
      <div id="right_side"><br><br>
          <div id="demo">

                                                   <!-- search section -->
                                                   <?php
              if(isset($_POST['search_student'])){
                ?>
                <center>
                  <form action="" method="post">
                    Enter ID:
                    <input type="text" name="id">
                    <input type="submit" name="search_by_id_for_search" value="Search">
                    
                  </form>
                </center>
                  <?php
              }
              if(isset($_POST['search_by_id_for_search'])){
          $query = "SELECT * FROM student where id = '$_POST[id]'";
          $query_run = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <table>
              <tr>
                <td>
                <h4>Search Student :</h4>
                  <b>ID:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['id']?>"disabled>
                </td>
              </tr>
              
              <tr>
                <td>
                  <b>Room Number:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['room_no']?>"disabled>
                </td>
              </tr>
              
              <tr>
                <td>
                  <b>Name:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['name']?>"disabled>
                </td>
              </tr>
              
              <tr>
                <td>
                  <b>Mobile Number:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['mobile']?>"disabled>
                </td>
              </tr>
              
              <tr>
                <td>
                  <b>Email:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['email']?>"disabled>
                </td>
              </tr>
              
              <tr>
                <td>
                  <b>Password:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" value="<?php echo $row ['password']?>"disabled>
                </td>
              </tr>
            </table>
            <?php
          }
          
              }
            
            ?>
                                             <!-- edit section -->
            <?php
              if(isset($_POST['edit_student'])){
                ?>
                <center>
                  <form action="" method="post">
                    Enter ID:
                    <input type="text" name="id">
                    <input type="submit" name="search_by_id_for_edit" value="Search">

                  </form>
                </center>
                <?php
              }

            
          if(isset($_POST['search_by_id_for_edit'])){
          $query = "SELECT * FROM student where id = '$_POST[id]'";
          $query_run = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($query_run)){
            ?>
              <form action="admin_edit_student.php" method="post">
              <table>
              <tr>
                <td>
                <h4>Edit Student</h4>
                  <b>ID:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="id" value="<?php echo $row ['id']?>">
                </td>
              </tr>

              <tr>
                <td>
                  <b>Room Number:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="room_no" value="<?php echo $row ['room_no']?>">
                </td>
              </tr>

              <tr>
                <td>
                  <b>Name:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="name" value="<?php echo $row ['name']?>">
                </td>
              </tr>

              <tr>
                <td>
                  <b>Mobile Number:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="mobile" value="<?php echo $row ['mobile']?>">
                </td>
              </tr>

              <tr>
                <td>
                  <b>Email:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="email"value="<?php echo $row ['email']?>">
                </td>
              </tr>

              <tr>
                <td>
                  <b>Password:&nbsp;&nbsp;&nbsp;</b>
                </td>
                <td>
                  <input type="text" name="password" value="<?php echo $row ['password']?>">
                </td>
              </tr>
              <tr>
                <td></td>
                <td><br><input type="submit" name="edit" value="Update"></td>
              </tr>

            </table>
              </form>
            <?php
            }
                
          }
            
            ?>

<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the form bellow :</h4></center>
					<form action="add_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>ID:</b>
							</td> 
							<td>
								<input type="text" name="id" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Room Number:</b>
							</td> 
							<td>
								<input type="text" name="room_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add_student" value="Add Student"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>


                                      <!-- add admin -->
      <?php 
				if(isset($_POST['add_new_admin'])){
					?>
					<center><h4>Fill out the form bellow</h4></center>
					<form action="add_admin.php" method="post">
						<table>
						<tr>
							<td>
								<b>ID:</b>
							</td> 
							<td>
								<input type="text" name="id" required>
							</td>
						</tr>
					
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><br><input type="submit" name="add_new_admin" value="Add Admin"></td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
                <!-- delete student -->
      <?php
				
        if(isset($_POST['delete_student']))
        {
          ?>
          <center>
          <form action="delete_student.php" method="post">
          <h4>Delete Student</h4><br>
          &nbsp;&nbsp;<b>Enter ID:</b>&nbsp;&nbsp; <input type="text" name="id">
          <input type="submit" name="delete_student" value="Delete">
          </form><br><br>
          </center>
          <?php
        }
        ?>
                  <!-- delete admin -->
          <?php
				
        if(isset($_POST['delete_admin']))
        {
          ?>
          <center>
          <form action="delete_admin.php" method="post">
          <h4>Delete Admin</h4><br>
          &nbsp;&nbsp;<b>Enter ID:</b>&nbsp;&nbsp; <input type="text" name="id">
          <input type="submit" name="delete_admin" value="Delete">
          </form><br><br>
          </center>
          <?php
        }
        ?>



          </div>
          
      </div>
  </body>
</html>