<?php
session_start();
require_once("config.php");
if(!isset($_COOKIE["currentUser"])){
    header("location:admin.php");
}
?>
<?php
include_once('includes/header_links.php');
?>
    <!-- body css -->
    <link rel="stylesheet" href="css/post_notice.css">

    <title>Munem Academy</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Munem Academy <i class="fas fa-book-open"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item">
                    <a class="nav-link " href="index.php">Study <i class="fas fa-user-graduate"></i><span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-primary" href="post_notice%20core.php">Post Notice <i class="fas fa-flag-checkered"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="admin.php">Admin <i class="fas fa-users-cog"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout core.php">logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section>
    <div class="container">
        <div class="postHeading text-center">
            <h1>Admin Notice</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <div class="popupMsz">
                    <?php
                    if(isset($_REQUEST['right'])){
                        echo "Post Insert Successfully";
                    }
                    ?>
                </div>

                <div class="singleBox">

                    <form method="post" action="post_notice%20core.php" enctype="multipart/form-data">

                        <label for="Subject">Subject:</label>
                        <input type="text" name="subject" class="form-control" placeholder="Enter Post Name" id="postName"/><br/>
                        <label for="notice">Notice:</label>
                        <textarea class="form-control" name="notice" placeholder="Enter Notice" id="exampleFormControlTextarea5" rows="3"></textarea><br/>
                        <input class="btn btn-primary" name="post" type="submit" value="Post" class="form-control"/>

                    </form>
                </div>
            </div>
            <div class="col-sm-6">

            </div>
        </div>

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