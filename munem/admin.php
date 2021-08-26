<?php
session_start();
?>
<?php
include_once('includes/header_links.php');
?>

    <!-- body css -->
    <link rel="stylesheet" href="css/admin.css">

    <title>Munem Academy</title>

</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="index.php">Munem Academy <i class="fas fa-book-open"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="index.php">Study <i class="fas fa-user-graduate"></i> <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="notice.php">Notice <i class="fas fa-flag-checkered"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-primary" href="#">Admin <i class="fas fa-users-cog"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
</header>
    <section class="signupSection">
        <div class="container">
            <div class="signupBox">
                <br/><br/><h1>Admin Login</h1>
                <div class="popupMsz">
                    <?php
                    if(isset($_REQUEST['wrong'])){
                        echo "Wrong Email Or Password";
                    }
                    ?>
                </div>
                <div class="inputBox">
                    <form action="admin core.php" method="post">
                        <div class="inputEmail">
                            <label>Email: </label><br/>
                            <input class="inputClass" type="email" placeholder="Enter Your Email" name="email" required/><br/>
                        </div>
                        <div class="inputPassword">
                            <label>Password: </label><br/>
                            <input class="inputClass" type="password" placeholder="Enter Your Password" name="password" required/><br/>
                        </div>
                        <div class="submitBtn">
                            <input class="btn btn-primary inputSubmitBtn" type="submit" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
include_once('includes/footer.php');
?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>