<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Blog Website</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <?php include 'dbconnect.php';?>
    <?php include 'header.php';?>

    <!-- Login Modal -->

    <!-- SignUpModal -->

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to our Blog World</h2>
                    <p>Technology News, Development and Trends</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to our Blog World</h2>
                    <p>Technology News, Development and Trends</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2><b>Welcome to our Blog World</b></h2>
                    <p><b>Technology News, Development and Trends</b></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
     
        <!-- Category container starts here -->
        <div class="container my-4" id="ques">
        <h2 class="text-center my-4">Blog - Browse Categories</h2>
        <div class="row my-4">
    <?php 
         $sql = "SELECT * FROM `blogs`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          $id = $row['blog_id'];
          $blog = $row['blog_name'];
          $desc = $row['blog_description'];
          
          echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/500x400/?' . $blog .',coding" 
                alt="Card image cap" class="card-img-top">
                <div class="card-body">
                <h5 class="card-title"><a href="blogs.php?blogid=' . $id .'">' . $blog .'</a></h5>
                <p class="card-text">' . substr($desc, 0, 500) .'...</p>
                <a href="blogs.php?blogid=' . $id .'" class="btn btn-primary">Click To Continue reading</a>
                </div>
                </div>
                </div>';
         } 
         ?>
         </div>
         </div>

    <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>