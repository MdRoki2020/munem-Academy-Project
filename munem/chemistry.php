<?php
require_once('config.php');
?>

<?php
include_once('includes/header_links.php');
?>
    <!-- body css -->
    <link rel="stylesheet" href="css/physics.css">

    <title>Munem Academy</title>
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="index.php">Munem Academy <i class="fas fa-book-open"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  ml-auto">
                <li class="nav-item">
                    <a class="nav-link bg-primary " href="#">Study <i class="fas fa-user-graduate"></i><span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="notice.php">Notice <i class="fas fa-flag-checkered"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Admin <i class="fas fa-users-cog"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<section>
    <div class="container">
        <h1 class="tableHeading text-center">Chemistry</h1>

        <table class="table table-striped table table-bordered">
            <thead>
            <tr>
                <th>Video Name</th>
                <th>Video</th>
                <th>Post Time</th>
            </tr>
            </thead>

            <?php
            $runQuery=mysqli_query($connect,"SELECT * FROM `chemistry`");
            while($row=mysqli_fetch_assoc($runQuery)){
            $count=0;
            ?>
            <tbody>
            <tr>
                <td><?php echo ucwords($row['postName'])?></td>
                <td><video width="320" height="176" controls >
                        <source src="chemistry_videos/<?php echo $row['video']?>" type="video/mp4">
                    </video></td>
                <td><?php echo$row['postTime']?></td>
            </tr>
            </tbody>

                <?php
            }
            ?>
        </table>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>