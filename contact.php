<html>

<head>
    <style>
    <?php include 'style.css';
    ?>
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">



</head>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.PNG" alt="logo..."></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
    <form action="contact.php" method="post">
        <div class="elem-group" style="display:grid;grid-template-columns: 1fr 5fr;">

            <div>
                <b><label for="name">Your Name</label>
            </div>

            <div>
                <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20}
                    required>
            </div>

        </div>

        <div class="elem-group" style="display:grid;grid-template-columns: 1fr 5fr;">
            <div>
                <label for="email">Your E-mail</label>
            </div>

            <div>
                <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
            </div>
        </div>



        <div class="elem-group" style="display:grid;grid-template-columns: 1fr 5fr;">
            <div>
                <label for="department-selection">Choose Concerned Department</label>
            </div>

            <div>
                <select id="department-selection" name="concerned_department" required>
                    <option value="">Select a Department</option>
                    <option value="billing">Billing</option>
                    <option value="marketing">Marketing</option>
                    <option value="technical support">Technical Support</option>
                </select>
            </div>
        </div>




        <div class="elem-group" style="display:grid;grid-template-columns: 1fr 5fr;">
            <div>
                <label for="title">Reason For Contacting Us</label>
            </div>

            <div>
                <input type="text" id="title" name="email_title" required placeholder="Unable to Reset my Password"
                    pattern=[A-Za-z0-9\s]{8,60}>
            </div>
        </div>


        <div class="elem-group" style="display:grid;grid-template-columns: 1fr 5fr;">
            <div>
                <label for="message">Write your message</label>
            </div>

            <div>

                <div>
                    <textarea id="message" name="visitor_message" placeholder="Say whatever you want."
                        required></textarea>
                </div>

                <div>
                    <button type="submit">Send Message</button>
                </div>

            </div>
        </div>
        </div>






    </form>


</body>

</html>