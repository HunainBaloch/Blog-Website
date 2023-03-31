<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style>
    #ques {
        min-height: 433px;
    }
    </style>

    <title>Blog Website</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <?php include 'dbconnect.php';?>
    <?php include 'header.php';?>

    <?php
    $id = $_GET['blogid'];
    $sql = "SELECT * FROM `blogs` WHERE blog_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $blogname = $row['blog_name'];
        $blogdesc = $row['blog_description'];
    }

    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        // Insert into thread db
        $th_title = $_POST['tittle'];
        $th_desc = $_POST['desc'];

        $th_title = str_replace("<", "&lt", $th_title);
        $th_title = str_replace(">", "&gt", $th_title);

        $th_desc = str_replace("<", "&lt", $th_desc);
        $th_desc = str_replace(">", "&gt", $th_desc);

        $user_id = $_POST['user_id']; 
        $sql = "INSERT INTO `threads` (`thread_tittle`, `thread_desc`, `thread_blog_id`, `thread_user_id`, `timestamp`) 
        VALUES ( '$th_title', '$th_desc', '$id', '$user_id', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Sucess!</strong> Your thread added! Please wait for community to respond.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
            ';
        }
        }
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $blogname;?> Blog</h1>
            <p class="lead"><?php echo $blogdesc;?></p>
            <hr class="my-4">
            <p>A blog should never talk to your audience, it should be a forum to talk with your audience. So use your blog as a conversation starter to engage the reader and begin a great professional relationship.</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
    </div>
    
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
     echo '<div class="container">
    <h1 class="py-2">Ask Your Questions</h1>
    <form action="'. $_SERVER["REQUEST_URI"]. '" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Problem Tittle
                </label>
                <input type="text" class="form-control" id="tittle" name="tittle" aria-describedby="tittle"
                    placeholder="Enter your problem tittle">
                <small id="help" class="form-text text-muted">Keep your tittle short</small>
            </div>
            <input type="hidden" name="user_id" value="'. $_SESSION["user_id"]. '">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Explain Your Problem</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
    }
    else{
        echo ' <div class="container">
        <h1 class="py-2">Ask Your Questions</h1>
        <p class="lead">You are not Logged in, Please Login to be able to Ask Your Questions</p>
        </div>';
    }
    ?>

    <div class="container mb-5" id="ques">
        <h1 class="py-2">Browse Your Questions</h1>

        <?php
            $id = $_GET['blogid'];
            $sql = "SELECT * FROM `threads` WHERE thread_blog_id=$id"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $id = $row['thread_id'];
                $tittle = $row['thread_tittle'];
                $desc = $row['thread_desc'];
                $thread_time = $row['timestamp'];
                $thread_user_id = $row['thread_user_id'];
                $sql2 = "SELECT user_email FROM `users` WHERE user_id='$thread_user_id'";
                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);
  
            //////////////////////////
            echo '<div class="media my-3">
            <img src="images/user.jpg" width="54px" class="mr-3" alt="...">
            <div class="media-body">'.
             '<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $tittle . ' </a></h5>
                '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> Asked by: '. $row2['user_email'] . ' at '. $thread_time. '</div>'.
            '</div>';
            //////////////////////////

        }
        // echo var_dump($noResult);
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
                <p class="display-4">No Results Found</p>
                <p class="lead"> Be the first person to ask your question</p>
        </div>
        </div>';
        }

?>
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